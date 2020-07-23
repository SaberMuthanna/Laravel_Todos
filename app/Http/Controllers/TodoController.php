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
    public function create(){

        return view("todos.create");
    }
    public function store()
    {
        $this->validate(request(),[
            'name'        => 'required',
            'description' => 'required'
        ]);
        $data =request()->all();

        $todo = New Todo();
        $todo ->name = $data['name'];
        $todo ->description = $data['description'];
        $todo->completed = false;

        $todo->save();
        session()->flash('success','Todo Created successfully');
        return redirect('/todos');


    }
    public function edit($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todos.edit')->with([
            'todo' => $todo,
        ]);

      
    }
    public function update($todoId){

        $this->validate(request(), [
            'name'        => 'required',
            'description' => 'required'
        ]);
        $data = request()->all();
        $todo = Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();
        session()->flash('success', 'Todo Update successfully');
        return redirect('/todos');
    }
    public function destroy($todoId){
        $todo = Todo::find($todoId);
        $todo->delete();
        session()->flash('success', 'Todo deleted successfully');
        return redirect('/todos');   
    }
    //using binding------------------------------------------
    public function completed(Todo $todo){
        $todo->completed =true ;
        $todo->save();
        session()->flash('success', 'Todo completed successfully');
        return redirect('/todos');
    }
}
