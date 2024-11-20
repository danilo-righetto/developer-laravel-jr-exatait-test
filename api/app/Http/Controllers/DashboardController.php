<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;
use App\Enum\StatusEnum;

class DashboardController extends Controller
{
    public function show(): Response
    {
        $tasks = Auth::user()->tasks;

        $inProgress = $tasks->filter(function (Task $item, int $key) {
            return $item->status == StatusEnum::PROGRESS->value;
        });

        $pending = $tasks->filter(function (Task $item, int $key) {
            return $item->status == StatusEnum::PENDING->value;
        });

        $completed = $tasks->filter(function (Task $item, int $key) {
            return $item->status == StatusEnum::COMPLETED->value;
        });

        return Inertia::render('Dashboard', [
            'name' => 'danilo',
            'inProgress' => $inProgress,
            'pending' => $pending,
            'completed' => $completed
        ]);
    }
}
