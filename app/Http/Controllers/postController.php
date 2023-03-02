<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\User;

class postController extends Controller
{
    function getPosts()
    {
        $posts = post::paginate(7);
        return view('postsTable', ['posts' => $posts]);
    }
    function viewPost($id)
    {

        $posts = post::with('user')->find($id);
        // dd($posts);
        return view('viewPost', ['post' => $posts]);
    }
    function editPost($id)
    {
        $users=User::get();
        $post =post::find($id);
        return view('updatePost',compact('users','post'));
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


        // $users=User::get();
        return view('createPost');
    }
    function storePost(Request $request)

    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $id = Auth()->id();
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $id,
        ]);
        // post::create($request->all());
        return redirect()->route('get');
    }
}
