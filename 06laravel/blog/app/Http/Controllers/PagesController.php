<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() // action home
    {
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to work'
        ];

        return view('welcome', [
            'tasks' => $tasks,
            'text' => 'ACR',
            'title' => request('title'), # definido no url ?title=
            'escaped' => "<script>alert('something')</script>",
        ]);

        /* alternativas: usando with
        return view('welcome')->withTasks($tasks)->withText('ACR');

        return view('welcome')->withTasks([
            'Go to the store',
            'Go to the market',
            'Go to work'
        ]);

        return view('welcome')->with([
            'tasks' => [
                'Go to the store',
                'Go to the market',
                'Go to work'
            ],
            'text' => 'ACR'
        ]);
        */
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

}
