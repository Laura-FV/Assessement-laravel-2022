<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($task){
      $task = \App\Models\Task::find($task);
      $task->delete();
      return view('delete');
    }
}
