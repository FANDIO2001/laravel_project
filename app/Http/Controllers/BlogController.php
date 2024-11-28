<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Post;

class BlogController extends Controller
{
    //
    public function index(){

       return view('blog.index',[
        'posts' => Post::paginate(1)
       ]);
    }

   public function show( $slug,  $id):RedirectResponse|View
    {
        $post= Post::findOrFail($id);

        if($post->slug !==$slug){
            return to_route('blog.show',['slug' => $post->slug,'id' => $post->id]);
        }
        return view('blog.show',[
            'post' =>$post
        ]);
    }
}
