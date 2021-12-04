<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    //
    public function show($postdescfromreq){



// $posts = [
//             'first_post' => 'hello from first_post',
//             'second_post' => 'hello from second_post'
// 	];
// $postdesc = \DB::table('posts')->where('postdesc',$postdescfromreq)->first();
    	// $postdesc = Posts::where('postdesc',$postdescfromreq)->first();
// if $postdesc.count(0){
// 	 return view('welcome',[
//            'post' => $postdesc
//               ]);
//     }
// }
// if (!array_key_exists($postdescfromreq, $postdesc)){
// 	abort(404,'nopeeee');
// }
// dd($postdesc);
    return view('welcome',[
           'post' => Posts::where('postdesc',$postdescfromreq)->firstorfail()
              ]);
    }
}
