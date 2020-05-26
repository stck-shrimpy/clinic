<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latestReviews = Review::with('user')->orderByDesc('created_at')->take(4)->get();
        
        return view('home',
            [
                'reviews' => $latestReviews
            ]
        );
    }
}
