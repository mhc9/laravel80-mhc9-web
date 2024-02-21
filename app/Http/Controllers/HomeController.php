<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /** To verify user is logged in or not */
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $headline = Post::with('category','author')
                    ->where('category_id', 2)
                    ->orderBy('publish_up', 'DESC')
                    ->first();

        $posts = Post::with('category','author')
                    ->where('category_id', 2)
                    ->orderBy('publish_up', 'DESC')
                    ->limit(4)
                    ->offset(1)
                    ->get();

        return view('home', compact('headline', 'posts'));
    }
}
