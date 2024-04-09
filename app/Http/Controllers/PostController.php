<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
     {
         return view('posts.index', [
        'posts' => Post::latest()->filter(request(['search', 'category']))->get()
       ]);
    }

   public function show(Post $post) 
   {
       return view('post.show', [
       'post' => $post
    ]);

   }
}
