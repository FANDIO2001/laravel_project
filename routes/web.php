<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\BlogController;


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

Route::get('/', function () {
    return view('blog.index');
});

// Route::prefix('/blog')->name('blog.')->group(function(){
//     Route::get('/blog',function(){
//         return Post::all();
//     });
    
    // Route::get('/',[BlogController::class,'index'])->name('index');

    // Route::get('/show',[BlogController::class,'show'])->name('show');

    Route::prefix('/blog')->group(function(){
        Route::get('/', [BlogController::class,'index'])->name('blog.index');

            // $post = new Post();
            // $post->title= 'mon-titre';
            //  $post->slug='slug11-slug';
            //  $post->content='content11-content';
            // $post->save();
            //  return Post::all();
            // return Post::paginate(24);
            // return[
            //  'link'=> \route('blog.show',['slug'=>'article','id'=>'13']),
            // ];
        

        Route::get('/{slug}/{id}',[BlogController::class,'show'])->where([
            'id' =>'[0-9]+',
            'slug' =>'[a-z0-9\-]+'
        ])->name('blog.show');
            // $post= Post::findOrFail($id);

        //     if ($post->slug==$slug) {
        //         # code... 
        //       return to_route('blog.show',['slug'=>$post->slug,'id'=>$post->id]);
        //     }
        // return $post;
       
        });



