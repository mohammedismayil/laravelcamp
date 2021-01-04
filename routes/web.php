<?php

use Illuminate\Support\Facades\Route;

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
// returning name from the request to view 
// Route::get('/', function () {
// 	$name = request('name');

//     return view('welcome',[
// 'name' => $name
//     ]
// );
// });
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

Route::get('/posts/{post}','\App\Http\Controllers\PostsController@show');	