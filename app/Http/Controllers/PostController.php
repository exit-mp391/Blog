<?php

namespace App\Http\Controllers;


use App\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
     public function __construct()
     {
       $this->middleware('auth')->except(['index', 'show']);
     }

    public function index()
     {

      $posts = Post::latest()->filter(request(['month', 'year']))->get();

      $archives = Post::archives();
  
     return view('posts.index', compact('posts')); 

     }

    public function create()
    {
   
     return view('posts.create');

    }
 
     public function show(Post $post)
     {
    
     return view('posts.show', compact('post')); 

     }

     public function store()
      {
        
       auth()->user()->publish(
          new Post(request(['title', 'body']))
       );

       return redirect('/');

      }














}
