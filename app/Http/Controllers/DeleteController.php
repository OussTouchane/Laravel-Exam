<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;  

class DeleteController extends Controller
{
    public function remove($task) 
    {  
        $task = \App\Models\Task::findOrFail($task);
    
        $task->delete($task);
        return view('delete');
    }
}