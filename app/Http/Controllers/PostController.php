<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller{

    public function postByCategory(Category $category){
        $cats = Category:: all();
        $posts = $category->posts;
        $myapartments = Apartment::all();
        return view('posts.index', ['myposts'=>$posts, 'cats'=>$cats, 'myapartments' => $myapartments]);
    }

    public function index(){
     $allposts = Post::where('category_id', 1)->get();
     $cats = Category:: all();
     $myapartments = Post::where('category_id', 5)->get();

        return view('posts.index', ['myposts'=>$allposts, 'cats'=>$cats, 'myapartments' => $myapartments]);
    }



    public function create(){
        $cats = Category::all();
        return view('posts.create', ['cats' => $cats]);
    }


    public function store(Request $request){
        $url = '';
        if ($request->hasFile('image')) {
            $url = $request->file('image')->store('images');
        }
    Post::create([
        'title'=>$request->title,
        'content'=>$request->content,
        'category_id'=>$request->category_id,
        'image' => $url

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
