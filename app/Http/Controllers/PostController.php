<?php

namespace App\Http\Controllers;


use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function index(){
        //logic to check authentication
        $posts=Post::all();
        // dd($posts);
        //View Is helper method can called from anywhere
        return view('posts.index',['posts'=>$posts]);
    }
    public function show($post){
        // $post=Post::find($post);
        $post=post::where('id',$post)->first();
        //  dd($post);
        return view('posts.show',['post'=>$post]);
    }
    public function create (){
        return view('posts.create',[
            'users'=> User::all(),
        ]);
    }
    public function store (StorePostRequest $myRequest){
        // dd($myRequest);
        //get the request data
        //insert into database
        $data=$myRequest->all();
        // dd($data);
        // Post::create([
        //     'title'=>$data['title'],
        //     'description'=>$data['description'],
        // ]);
        // $myRequest->validate([
        //     'title' =>'required|string|min:3|max:30',
        //     'description' =>'required|string|min:50|max:255',

        // ],['title.required'=>'watch Out Title is required',
        // 'description.required'=>'watch Out Description is required']);
        post::create($data);
        // $post=new Post;
        // $post->title=$data['title'];
        // $post->description=$data['description'];
        // $post->save();
        return redirect()->route('posts.index');
    }
    public function destroy($post)
    {
        // dd($id);
        $post = Post::find($post );
        $post->delete();
        return redirect()->route('posts.index');
    }
    public function edit($post){
        $post=post::where('id',$post)->first();
        // dd($post);
        return view('posts.edit',['post'=>$post,'users'=> User::all()]);
    }
    public function update(Request $request, $post){
        $postToUpdate = Post::find($post);
        if (!$postToUpdate) {
            abort(404, 'Post not found');
        }
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id'
        ]);
        $postToUpdate->update($validatedData);
        return redirect()->route('posts.index');
    }

   }
