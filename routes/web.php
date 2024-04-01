<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () 
{

   $files = File::files(resource_path("posts"));
  
   $posts = array_map(function($file) {
       $document = YamlFrontMatter::parseFile($file);
       

        return new Post(
            
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug

        );
    }, $files);

    return view('posts', [
        'posts' => $posts
    ]);
});



Route::get('posts/{post}', function($slug) {

    return view('post', [

       'post' => Post::find($slug)

    
    ]);
});



