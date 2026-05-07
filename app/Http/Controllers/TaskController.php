<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks;

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Task::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'status' => 'pending'
        ]);

        return redirect('/tasks');
    }

    public function complete(Task $task)
    {
        $task->update([
            'status' => 'completed'
        ]);

        return redirect('/tasks');
    }
}