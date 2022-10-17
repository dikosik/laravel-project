<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\Post;
use App\Models\Apartment;

class ApartmentController extends Controller
{

    public function index(){
        $cats = Category:: all();
        $myapartments = Post::where('category_id', 5)->get();

        return view('posts.index', [ 'cats'=>$cats, 'myapartments' => $myapartments]);
    }
    public function create()
    {
        $cats = Category::all();
        return view('posts.createap', ['cats' => $cats]);
    }


    public function store(Request $request)
    {
        Apartment::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id

        ]);
        return redirect()->route('posts.index');
    }


    public function show(Post $apartment)
    {
        return view('posts.showap', ['apartment'=>$apartment]);
    }


    public function edit(Post $apartment)
    {
        $cats = Category::all();
        return view('posts.editap', ['apartment'=>$apartment,'cats'=>$cats]);
    }


    public function update(Request $request,Post $apartment)
    {
        $apartment->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'category_id'=>$request->category_id
        ]);
        return redirect()->route('posts.index');
    }


    public function destroy(Post $apartment)
    {
        $apartment->delete();
        return redirect()->route('posts.index');
    }
}
