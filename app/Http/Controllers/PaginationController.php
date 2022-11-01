<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function allTasks(){
        $tasks = Task::paginate(10);
        return view('task',compact('tasks'));
    }
}
