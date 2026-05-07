<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())
            ->latest()
            ->get();

        $completed = $tasks
            ->where('is_completed', true)
            ->count();

        $unfinished = $tasks
            ->where('is_completed', false)
            ->count();

        $total = $tasks->count();

        return view('dashboard.siswa', compact(
            'tasks',
            'completed',
            'unfinished',
            'total'
        ));
    }
}