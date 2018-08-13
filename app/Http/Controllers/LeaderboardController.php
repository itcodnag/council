<?php

namespace App\Http\Controllers;

class LeaderboardController extends Controller
{
    /**
     * Display a listing  of the leaderboard.
     */
    public function index()
    {
        return view('leaderboard.index');
    }
}
