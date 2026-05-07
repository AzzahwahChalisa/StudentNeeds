<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

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
        Task::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'status' => 'pending',
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