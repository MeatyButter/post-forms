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
        // Pass current posts
        $posts = Post::where('user_id', Auth::user()->id)
                ->orderBy('created_at', 'DESC')
                ->get();
        // return the view while passing the posts array
        return view('post.create', compact('posts'));
    }

    public function store()
    {
        // Validate that everything havs been submitted
        $validator = $this->validate(request(), [
            'title'  => 'required',
            'body'  => 'required'
        ]);

        // If validation passes, create new post and insert into the DB
        $post = new Post([
            'user_id'   => Auth::user()->id,
            'title'      => request('title'),
            'body'     => request('body')
        ]);

        $post->save();

        return redirect('/home');
    }

    protected function delete()
    {

    }

}
