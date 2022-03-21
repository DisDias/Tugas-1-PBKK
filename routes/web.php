<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('welcome');
});

Route::get('/dashboard',function(){
    return redirect('/');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/formulir', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'content']);

Route::get('/categories', function()
{
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category)
{
    return view('post', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category', 'user'),
        //'category' => $category->name
    ]);
});

Route::get('/authors', function()
{
    return view('authors', [
        'title' => 'Post Authors',
        'users' => User::all()
    ]);
});

Route::get('/authors/{author:username}', function(User $author)
{
    return view('post', [
        'title' => "Post by Author : $author->name",
        'posts' => $author->posts->load('category', 'user'),
        //'author' => $author->name
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Dias Tri Kurniasari",
        "email" => "diaskurniasari2@gmail.com",
    ]);
});


