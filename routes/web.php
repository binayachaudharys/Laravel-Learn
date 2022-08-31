<?php

use Illuminate\Support\Facades\Route;
    use App\Models\Post;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;
use Spatie\YamlFrontMatter\YamlFrontMatter;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts.post',[
        'posts' => Post::all()
    ]);
});
Route::get('/post/{post:slug}', function(Post $post){
   
   return view('posts.single',[
    'post' => $post
   ]);
});
