<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Task;

class ShowTaskController extends Controller
{
    public function show($id)
    {
        $task = \App\Models\Task::findOrFail($id);
        return view('task', [
          'tasks' => \App\Models\Task::all(),
        ]);
    }
}
