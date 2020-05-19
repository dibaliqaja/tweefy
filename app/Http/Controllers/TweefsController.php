<?php

namespace App\Http\Controllers;

use App\Tweef;
use Illuminate\Http\Request;

class TweefsController extends Controller
{
    public function index()
    {
        return view('home', [
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
