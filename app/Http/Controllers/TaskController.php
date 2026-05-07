<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'is_completed' => false
        ]);

        return redirect()->back();
    }

    public function update(Task $task)
    {
        $task->update([
            'is_completed' => !$task->is_completed
        ]);

        return redirect()->back();
    }
}