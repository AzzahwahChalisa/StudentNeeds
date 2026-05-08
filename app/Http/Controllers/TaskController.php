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

            'title' => 'required',
            'description' => 'nullable',
            'deadline' => 'nullable'

        ]);

        Task::create([

            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'status' => 'Pending'

        ]);

        return redirect()->back();
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([

            'status' => 'required'

        ]);

        $task->status = $request->status;

        $task->save();

        return redirect()->back();
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->back();
    }
}