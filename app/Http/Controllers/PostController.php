<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\post ;
use App\Models\user;
use App\Http\Requests\StorePostRequest;
class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    
    }
    public function show($postId)
    {
      
        return view('posts.show');
    
    }
    public function create()
    {
        $users =user::all();
        return view('posts.create' , ['users' =>$users]);
    
    }
    public function store(StorePostRequest $requestObj)
    {     
        //logic to store data in database
        $requestData = $requestObj->all(); //object from database
        // $requestData =request()->all();
        $requestObj ->validate(
           
        //insert into
        post::create([ //model name
            
            // 'title' =>  $requestObj->title,
            // 'description' => $requestObj->description,
            // 'user_id' =>$requestObj-> post_creator,
        ]
    )
);  
        return  'stooore';
    
    }
}
