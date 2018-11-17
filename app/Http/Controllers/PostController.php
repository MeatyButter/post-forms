<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
use Auth;

class PostController extends Controller
{
    /**
     * Set Auth for this Contorller
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index()
    {
        // Pull all of the posts associated with a specific user and sort by newest
        $posts = Post::where('user_id', Auth::user()->id)
                ->orderBy('created_at', 'DESC')
                ->get();

        // return the view while passing the posts array
    	return view('home', compact('posts'));
    }

    function create()
    {

    }

    function store()
    {

    }

    function delete()
    {

    }

}
