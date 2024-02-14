<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        //select * from posts; 
        $postsFromDB = Post::all(); // colection object
       
        return view('posts.index',['posts' => $postsFromDB]);
    }
    // public function show($postId)
    public function show(Post $post)
    {

        // $singelPostFromDB = Post::find($postId);
        // $singelPostFromDB = Post::findOrFail($postId);
        // return view('posts.show',['post' => $singlePost]);
        // return view('posts.show',['post' => $singelPostFromDB]);
        return view('posts.show',['post' => $post]);
    }
    public function create(){
        return view('posts.create');
    } 

    public function store()
    {

        // 1- get the user data
        //! 2 ways to get user data 
        //* Way 1
        // $data = $_POST;
        // return $data;
        // $request = request();
        // dd($request->title, $request->all());
        //* Way 2
        $data = request()->all();
        $title = request()->title;
        $descreiption = request()->description;
        $postCreater = request()->post_creator; 

        dd($data,$title,$descreiption,$postCreater);

        // dd($request->titel,$request->all );
        // $data = request()->all();
        // dd($data);

        // 2- store the user data in database
        
        // 3- redirection to posts.index
        // return to_route('posts.index');
        
    }
    public function edit()
    {
        return view('posts.edit');
    }
    public function update()
    {
        // 1- get the user data

        $title = request()->title;
        $descreiption = request()->description;
        $postCreater = request()->post_creator; 

        // dd($title,$descreiption,$postCreater);

  
        // 2- update the user data in database
        
        // 3- redirection to posts.show
        return to_route('posts.show',1);
            
    }
    public function destroy()
    {
        //1- delete the post from database

        //2- redirect to posts.index
        return to_route('posts.index');
    }
}

