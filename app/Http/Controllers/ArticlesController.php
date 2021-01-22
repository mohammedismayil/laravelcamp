<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
class ArticlesController extends Controller
{
 
 public function index(){
 	$articles = Articles::latest()->get();
 	return view('Articles.index',['articles'=> $articles]);
 	// return response()->json($articles, 201);
 }


    public function show($idd){

    
$articles = Articles::find($idd);
return view('Articles.show',[
'articles' => [$articles]
]);
    }


    public function create(){




    	return view('Articles.create');
    }

    public function store(){
// dump(request()->all());

request()->validate([
'title' => 'required',
'excerpt' => 'required',
'body'=> 'required'
]);

    	$article = new Articles();
    	$article->title = request('title');
    	$article->excerpt = request('excerpt');
    	$article->body = request('body');
    	$article->save();


    	return redirect('/articles');
    }
 public function edit($idd){

    
$articles = Articles::find($idd);
return view('Articles.edit',[
'articles' => [$articles]
]);
    }

    //For API's


    public function returnArticles(){
 	$articles = Articles::latest()->get();
 	// $skills = Skills::latest()->get();
 	// return view('Articles.index',['articles'=> $articles]);
 	return response()->json($articles, 201);
 }
}
