<?php

namespace App\Http\Controllers;

use App\User;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        auth()->user()->toggleFollow($user);

        return back();
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
}
