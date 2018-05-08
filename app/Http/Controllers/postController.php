<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use DateTime;
class postController extends Controller
{
   
   function index()
   {
        $data = Post::get();
        return view('posts.listPosts',compact("data"));
   }
   function addpost (Request $request){
    
    if($request->hasfile('image'))
        $path = $request->image->store('public');
    $post = new Post;

    $post->content=request('content');
    $post->title=request('title');
    $post->image=$path;
    $post->user_id=1;
    $post->save();
    
    $data = Post::get();
    return view('posts.listPosts',compact("data"));
    
    }
function editpost($id){
    $postDetails=Post::find($id);
    return view('posts.editPost',compact('postDetails'));


}
function deletepost($id){
    DB::table('posts')->where('id','=',$id)->delete();
    //return view('posts.addPost');
    $data = Post::get();
    return view('posts.listPosts',compact("data"));
     
 }
 function toaddpost (){
    return view('posts.addPost');
}
function save($id){
    //$post = new App\Post;
    $post=Post::find($id);
    $post->content=request('econtent');
    $post->title=request('etitle');
    $post->save();
    //return back();
    $data = Post::get();
    //return view('posts.listPosts',compact("data"));
    return view('posts.addPost');


}
function edit($id){
    //$post = new App\Post;

    $post=App\Post::find($id);
    $post->content=request('econtent');
    $post->title=request('etitle');
    $post->save();
    $data = Post::get();
    return view('posts.listPosts',compact("data"));
    //return view('posts.editPost',compact('postDetails'));


}
function getPost($id) {

    //$postDetails=["first post","any content.......","2018-04-03","category1"];
    $post=Post::find($id);
    $comments = $post -> comments;

    $postDetails = ["post"=>$post,"comments"=>$comments];
    //dd($postDetails["post"]);


    return view('posts.postDetails',compact("postDetails"));
}
}
