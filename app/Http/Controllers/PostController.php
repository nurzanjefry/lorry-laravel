<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function __contruct(Request $request)
    {
        $user = session()->get('u_i');

        if(!$user) {
            session()->flush(); 
            return redirect('/login');
        }
    }

    public function indexPost() {
        
        $user = session()->get('u_i');
        $user = User::find($user);
        $posts = Post::all();
        return view('post.post', compact('posts', 'user'));
    }

    public function createPost(Request $request) {

        $validator = Validator::make($request->all(), [
            'title'    => 'required|string|min:5|max:100',
            'content'    => 'required|string|min:5|max:500',
            'created_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->route('post.index')
                    ->withErrors($validator)
                    ->withInput();
        }

        $request['posted'] = true;
        unset($request['_token']);
        $modelInstance = Post::create($request->all());
        return redirect()->route('post.index');
    }
}
