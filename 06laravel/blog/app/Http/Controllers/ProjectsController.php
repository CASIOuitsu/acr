<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index() // action home
    {
        #$projects = \App\Project::all(); # com namespace. \ para começar na raiz
        $projects = Project::all();
        #$projects = auth()->user()->projects; # exemplo: projs de user com login atual

        #return $projects; // retorna em json
        return view('projects.index', ['projects' => $projects]);
        #return view('projects.index', compact($projects);  # apenas quando mesmo nome
    }


    public function create() # simples, retorna view que mostra form create
    {
        return view('projects.create');
    }


    public function store() # recebe do form e guarda os dados na BD
    {
        $validated = request()->validate([
            'title' => ['required', 'min:1', 'max:255'],
            'description' => 'required'
        ]);
        #return $validated;

        Project::create($validated); # $validated or attributes
        #Project::create(request(['title', 'description']));  # apenas quando mesmo nome usado nas variaveis da view e na base de dados
        /* igual a
        Project::create([ # atalho create: obriga a usar o campo fillable ou guarded no model App\Project.php
            'title' => request('title'),
            'description' => request('description')
        ]);*/

        return redirect('/projects');
    }


    public function storeAlt() # maneira basica, sem atalhos
    {
        #return request()->all();
        #return request('title');

        $project = new Project(); // criar novo

        // atribuir dados
        $project->title = request('title');
        $project->description = request('title');

        $project->save();
        return redirect('/projects');
    }


    public function show($id)
    {
        $project = Project::findOrFail($id);
        #return $project;
        return view('projects.show', compact('project'));  # compact ou ['project' => $project]
    }


    public function showAlt(Project $project) # com argumento, reconhece pelo standard de ter o id no url/route
    {
        return view('projects.show', compact('project')); # compact apenas quando mesmo nome
    }


    public function edit($id)
    {
        #return $id;
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }


    public function update($id)
    {
        $project = Project::findOrFail($id);

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }


    public function updateAlt($id)
    {
        #dd('hi'); # debug, (die and dump)
        ##dd(request()->all()); # debug, (die and dump)
        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id)->delete();
        #$project->delete();

        return redirect('/projects');
    }

    public function first()
    {
        $project = Project::all()->first(); # funciona sem all()
        return view('projects.show', compact('project'));
    }

    public function last()
    {
        $project = Project::all()->last(); # tem de ter all()
        #$project = Project::last()->get(); # alternativa
        return view('projects.show', compact('project'));
    }

}
