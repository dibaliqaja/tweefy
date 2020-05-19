<?php

namespace App\Http\Controllers;

use App\Tweef;

class TweefsController extends Controller
{
    public function index()
    {
        return view('tweefs.index', [
            'tweefs' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate(['body' => 'required|max:255']);

        Tweef::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body']
        ]);

        return redirect('/home');
    }
}
