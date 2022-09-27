<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{
    //
    public function index(){
        $tasks = Task::all();

        return view('tasks.index',compact('tasks'));
    }
    //Lesson 9
    public function show(Task $task //$id 
    ){  // Task::find(wildcard);
        //$task = Task::find($id);
        //return $task;
        return view('tasks.show',compact('task'));
    }
}
