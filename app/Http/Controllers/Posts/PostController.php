<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index(){
        // return "<h1>One day, God willing</h1>";
        $allPosts =[
            ['id' => 1, 'title' => 'PHP', 'posted_by'         => 'Mahmoud'   , 'created_at' => '2024-2-5 01:15:00'],
            ['id' => 2, 'title' => 'Javascript', 'posted_by'  => 'Ibrahim'   , 'created_at' => '2024-2-5 01:15:00'],
            ['id' => 3, 'title' => 'HTML', 'posted_by'        => 'Hussien'   , 'created_at' => '2024-2-5 01:15:00'],
            ['id' => 4, 'title' => 'CSS', 'posted_by'         => 'Elsharakwy', 'created_at' => '2024-2-5 01:15:00'],
        ];
        return view('posts.index',['posts' => $allPosts]);
    }
    public function show($postId)
    {
        // return "<h1> Hiiiiiiiii</h1>";
        $singlePost =
        [
           'id' => 1,'description' => 'Thanks God ', 'title' => 'PHP', 'posted_by'=> 'Mahmoud','created_at' => '2024-2-5 01:15:00'
            
        ];
        return view('posts.show',['post' => $singlePost]);
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

