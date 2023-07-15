<?php

namespace App\Http\Controllers;

use App\Models\Bio\Bio;
use App\Models\Bio\Skill;
use App\Models\Resume\Work;
use Illuminate\Http\Request;
use App\Models\Resume\Education;
use App\Models\Services\Service;
use App\Models\Portfolio\Portfolio;
use Illuminate\Support\Facades\Auth;
use App\Models\Blogs\Blog_Introduction;
use App\Models\Testimonial\Testimonial;

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

        $bio = Bio::where('user_id' , $user_id)->get();
        $bio_info = $bio->pluck('bio')->first();

        $skills = Skill::where('user_id' , $user_id)->get();

        $portfolios = Portfolio::where('user_id' , $user_id)->get();

        $services = Service::where('user_id' , $user_id)->get();

        $experience = Work::where('user_id' , $user_id)->get();

        $education = Education::where('user_id' , $user_id)->get();

        $testimonial = Testimonial::where('user_id' , $user_id)->get();         

        return view('website')->with([
            'introduction' => $introduction,
            'introduction_description' => $introduction_description,
            'image' => $image,
            'bio_info' => $bio_info,
            'skills' => $skills,
            'portfolios' => $portfolios,
            'services' => $services,
            'experience' => $experience,
            'education' => $education,
            'testimonial' => $testimonial
        ]);
    }
}
