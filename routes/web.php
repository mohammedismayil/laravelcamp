<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;
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
//returning name from the request to view
// Route::get('/', function () {
// 	return view('welcome');
// });
// statically adding admin route

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin/posts','\App\Http\Controllers\ArticlesController@index');

Route::get('/signup', function () {
    return view('user_lists.create');
});
Route::get('/image-upload','\App\Http\Controllers\ImageUploadController@index');
Route::post('/image-upload/store','\App\Http\Controllers\ImageUploadController@store');
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/', function () {
    return view('welcome',[
'articles' => App\Models\Articles::latest()->get(),
'skills' => App\Models\Skills::latest()->get()
    ]);
});
Route::get('/about', function () {
    return view('about',[
'articles' => App\Models\Articles::latest()->get(),
'skills' => App\Models\Skills::latest()->get()
    ]);
});
// hello from the laravel camp
// returning the post from the array if given post from the request is equal
// Route::get('/posts/{post}', function ($post) {
// 	// $name = request('name');
// 	$posts = [
//             'first_post' => 'hello from first_post',
//             'second_post' => 'hello from second_post'
// 	];

//     return view('welcome',[
//            'post' => $posts[$post] ?? 'not available please check'
//               ]
//               );
//       });

Route::get('/articles/{article}','\App\Http\Controllers\ArticlesController@show');
Route::get('/articles/{article}/edit','\App\Http\Controllers\ArticlesController@edit');
Route::get('/articles/','\App\Http\Controllers\ArticlesController@index');


Route::post('/articles/{article}/update','\App\Http\Controllers\ArticlesController@update');
// Route::get('/articles/{article}', function () {
//     return view('about',[
// 'articles' => App\Models\Articles::latest()->get(),
// 'skills' => App\Models\Skills::latest()->get()
//     ]);
// });
Route::get('/create', '\App\Http\Controllers\ArticlesController@create');
Route::post('/articles/createArticle', '\App\Http\Controllers\ArticlesController@createArticle');

// new user signup using post method

Route::post('/signupuser', '\App\Http\Controllers\usersignupController@register');

Route::get('/users', '\App\Http\Controllers\usersignupController@userlists');
Route::get('/getcsrf', '\App\Http\Controllers\usersignupController@returncsrf');
// Route::get('/users', '\App\Http\Controllers\ArticlesController@create');
//Image upload routes



// Routes for API's
Route::get('api/articles/','\App\Http\Controllers\ArticlesController@returnArticles');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
