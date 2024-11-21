<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\Task;
use App\Http\Requests\TaskUpdateRequest;

class TaskController extends Controller
{
    public function show(int $id): Response
    {
        $user = Auth::user();
        $task = Task::where('id', $id)->where('user_id', $user->id)->first();

        return Inertia::render('Task/Show', [
            'task' => $task
        ]);
    }

    public function edit(int $id): Response
    {
        $user = Auth::user();
        $task = Task::where('id', $id)->where('user_id', $user->id)->first();

        return Inertia::render('Task/Edit', [
            'task' => $task,
        ]);
    }

    public function update(TaskUpdateRequest $request)
    {
        $user = Auth::user();
        $task = Task::where('id', $request->id)->where('user_id', $user->id)->first();
        $task->title = $request->validated('title');
        $task->description = $request->validated('description');
        $task->status = $request->validated('status');
        $task->save();

        return Redirect::route('dashboard');
    }

    public function destroy(Request $request)
    {
        $user = Auth::user();
        Task::where('id', $request->id)->where('user_id', $user->id)->delete();

        return Redirect::route('dashboard');
    }
}
