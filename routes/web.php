<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', ['tittle' => 'Home Page']);
});
Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])
    //     ->latest()
    //     ->get();
    return view('posts', [
        'tittle' => 'Blog',
        'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()
    ]);
});
Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::find($slug);

    return view('post', ['tittle' => 'Single Post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('category', 'author');
    // $post = Post::find($slug);
    return view('posts', ['tittle' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Suria Pratama', 'tittle' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['tittle' => 'contact']);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', [
        'tittle' => $category->posts()->count() . ' Posts in Category: ' . $category->category_names,
        'posts' => $category->posts
    ]);
});
