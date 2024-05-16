<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use DB;
class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $post = Post::where('active', 1)->paginate(4);

        $limitedContents = $post->map(function ($post) {
            return Str::limit($post->content, 100);

        }); 
        return view('index',compact("post","limitedContents"));

    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function post(string $id)
    {
        $post = Post::findOrFail($id);

        return view('post',compact("post"));
    }

}
