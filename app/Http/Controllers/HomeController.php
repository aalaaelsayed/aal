<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\models\User;
use App\models\Post;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\blogController;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexx()
    {
        //return view('home');
        if (Auth::check()) {
            return redirect('admin/posts');

        } else {
           return redirect('index');
        }
    }
    public function indexxx()
    {
        
        return view('home');

    }
}
