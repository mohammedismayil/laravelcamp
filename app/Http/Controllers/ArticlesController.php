<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
class ArticlesController extends Controller
{
    //
    public function show($idd){
// dd($id);
    
$articles = Articles::find($idd);
return view('Articles.show',[
'articles' => $articles

]);
    }
}
