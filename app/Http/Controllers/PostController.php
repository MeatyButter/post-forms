<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('home');
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
