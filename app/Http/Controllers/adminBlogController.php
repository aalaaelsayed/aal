<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class adminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Posts =Post::get();
        return view ('admin.posts' ,compact("Posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view ('admin.addPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $messages = $this->messages();
        $data =$request->validate([
        'title'=>'required|string|max:50',
        'content'=>'required|string',
        ] ,$messages);
   
        $data['active'] =isset($request->active);

             Post::create($data);
            return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $Posts = Post::findOrFail($id);
        return view ('admin.editpost',compact("Posts"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = Post::find($id);
        $messages = $this->messages();
        $data = $request->validate([
            'title'=>'required|string|max:50',
            'content'=>'required|string',
         
        ], $messages);

        $data['active'] = isset($request->active);
    Post::where('id',$id)->update($data);
    return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Post::where ('id',$id) ->delete();
        return redirect('admin/posts');
    }
    public function trashed()
    {
        //
      $post = Post::onlyTrashed()->get();
return view ('admin.trashedPosts',compact("post"));

    }
    
    public function forceDelete(string $id)
    {
        //
        Post::where ('id',$id) ->forceDelete();
        return redirect('admin/posts');
    }
    public function restore(string $id)
    {
        //
        Post::where ('id',$id) ->restore();
        return redirect('admin/posts');
    }
    public function messages(){
        return [
            'title.required'=>'الاسم  المطلوب',
            'content.string'=>'Should be string',
         
            ];
 
    }
}
