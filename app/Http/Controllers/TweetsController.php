<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TweetsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Factory|View
     */
    public function index()
    {

        return view('home', [
            'tweets' => auth()->user()->timeline(),
        ]);
    }


    public function store()
    {
        request()->validate([
            'body' => 'required|max:255'
        ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body'    => request('body'),
        ]);

        return redirect('/home');
    }
}
