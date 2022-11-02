<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function addTask(){
        return view('add-task');
    }

    public function createTask(Request $request){
        $task = new Task();
        $task->name = $request->name;
        $task->title = $request->title;
        $task->is_completed = 0;
        $task->save();
       return view('add-task');
    }

    public function getTask(){
        $tasks = Task::orderBy('id')->get();
        return view ('task',compact('tasks'));
    }

    public function deleteTask($id){
        Task::where('id',$id)->delete();
        return back();
    }

    public function editTask($id){
        $task = Task::find($id);
        return view('edit-task',compact('task'));
    }

    public function updateTask(Request $request){
        $task = Task::find($request->id);
        $task->name = $request->name;
        $task->title = $request->title;
        $task->is_completed = $request->is_completed;
        $task->save();
        return view('add-task');
    }
}