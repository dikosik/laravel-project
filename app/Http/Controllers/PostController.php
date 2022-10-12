<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller{

    public function postsByCategory(Category $category){
        $cats = Category:: all();
        $posts = $category->posts;
        return view('posts.index', ['myposts'=>$posts, 'cats'=>$cats]);
    }

    public function index(){
     $allposts = Post::all();
     $cats = Category:: all();

        return view('posts.index', ['myposts'=>$allposts, 'cats'=>$cats]);
    }



    public function create(){
        $cats = Category::all();
        return view('posts.create', ['cats' => $cats]);
    }


    public function store(Request $request){
    Post::create([
        'title'=>$request->title,
        'content'=>$request->content,
        'category_id'=>$request->category_id

    ]);
    return redirect()->route('posts.index');
    }


    public function show(Post $post){
        return view('posts.show', ['post'=>$post]);
    }


    public function edit(Post $post){
        $cats = Category::all();
        return view('posts.edit', ['post'=>$post,'cats'=>$cats]);
    }


    public function update(Request $request, Post $post){
        $post->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post){
      $post->delete();
        return redirect()->route('posts.index');
    }
}
