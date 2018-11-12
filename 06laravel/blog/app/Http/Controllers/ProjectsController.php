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
        Project::create(request(['title', 'description']));  # apenas quando mesmo nome usado nas variaveis da view e na base de dados
        /* igual a
        Project::create([ # atalho: obriga a usar o campo fillable ou guarded no model App\Project.php
            'title' => request('title'),
            'description' => request('description')
        ]);*/

        return redirect('/projects');
    }


    public function storeAlt() # simples, sem atalhos
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


}
