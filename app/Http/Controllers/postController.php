<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class postController extends Controller
{
    function getPosts()
    {
        $posts = post::get();
        return view('postsTable', ['posts' => $posts]);
    }
    function viewPost($id)
    {
        $posts = post::find($id);
        return view('viewPost', ['post' => $posts]);
    }
    function editPost($id)
    {
        $posts =post::find($id);
        return view('updatePost', ['post' => $posts]);
    }
    function update($id,Request $request){
        $posts=post::find($id);
      $posts->update($request->except("_method","_token"));
      return redirect()->route('get');
    }
    function deletepost($id)
    {
        post::where('id', $id)->delete();
        return redirect()->route('get');
    }
    function createPost()
    {
        return view('createPost');
    }
    function storePost(Request $request)
    {
        post::create($request->all());
        return redirect()->route('get');
    }
}
