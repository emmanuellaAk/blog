<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function index()
     {
         return view('posts.index', [
        'posts' => Post::latest()->filter(
            request(['search', 'category', 'author'])
        )->paginate(6)->withQueryString()
       ]);
    }

   public function show(Post $post) 
   {
       return view('posts.show', [
       'post' => $post
    ]);
  
   }

    public function create()
    {   
        return view('posts.create');
    }

}
