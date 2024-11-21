<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class TaskController extends Controller
{
    public function show(Request $request): Response
    {
        return Inertia::render('Task/Show', [
            'type' => 'show',
            'status' => session('status'),
        ]);
    }

    public function edit(Request $request): Response
    {
        return Inertia::render('Task/Show', [
            'type' => 'edit',
            'status' => session('status'),
        ]);
    }

    public function destroy(Request $request): Response
    {
        return Inertia::render('Task/Show', [
            'type' => 'destroy',
            'status' => session('status'),
        ]);
    }
}
