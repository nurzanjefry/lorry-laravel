<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class CommentController extends Controller
{
    public function createComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment'    => 'required|string|min:5|max:100',
            'created_id' => 'required|integer',
            'post_id'    => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('post.index')
                    ->withErrors($validator)
                    ->withInput();
        }

        $request['active'] = true;
        unset($request['_token']);
        $modelInstance = Comment::create($request->all());
        return redirect()->route('post.index');
    }
}
