<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Cloudinary;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    } 
    
    public function test_index(Post $post)
    {
        return view('posts.test_index')->with(['posts' => $post->get()]);  
       
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function create(Category $category)
    {
        return view('posts.create')->with(['categories' => $category->get()]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        if($request->file('image')){ 
            $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
        }
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post, Category $category)
    {
        return view('posts.edit')->with(['post' => $post, 'categories' => $category->get()]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function test_show(Post $post)
    {
        return view('posts.test_show')->with(['post' => $post]);
     //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function test_create()
    {
        return view('posts.test_create');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function tuto_index(Post $post)
    {
        return view('posts.t_index')->with(['post' => $post]);
    }
}