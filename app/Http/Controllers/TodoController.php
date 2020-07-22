<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos  = Todo::all();
        return view('todos.index')->with([
            'todos' => $todos,
        ]);
    }
    public function show($todo)
    {
        $todo = Todo::find($todo);
        return view('todos.show')->with([
            'todo' => $todo,
        ]);;
    }
}
