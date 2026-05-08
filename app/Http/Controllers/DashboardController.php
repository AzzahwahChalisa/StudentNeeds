<?php

namespace App\Http\Controllers;

use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();

        $total = Task::count();

        $completed = Task::where('status', 'Completed')->count();

        $unfinished = Task::where('status', '!=', 'Completed')->count();

        return view('dashboard.siswa', compact(

            'tasks',
            'total',
            'completed',
            'unfinished'

        ));
    }

    public function toggle(Task $task)
    {
        $task->status = $task->status == 'Completed'
            ? 'Pending'
            : 'Completed';

        $task->save();

        return redirect()->back();
    }
}