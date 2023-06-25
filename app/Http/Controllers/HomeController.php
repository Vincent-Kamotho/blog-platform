<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs\Blog_Introduction;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        return view('clients.userhomepage');
    }

    public function website()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $introduction = Blog_Introduction::where('user_id' , $user_id)->get();
        $introduction_description = $introduction->pluck('introduction')->first();
        $image = $introduction->pluck('image')->first();

        return view('website')->with([
            'introduction' => $introduction,
            'introduction_description' => $introduction_description,
            'image' => $image
        ]);
    }
}
