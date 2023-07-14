<?php

namespace App\Http\Controllers\Testimonials;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Testimonial\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;

        $testimonials = Testimonial::where('user_id' , $user_id)->get();
        return view('clients.testimonials.testimonials')->with('testimonials' , $testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.testimonials.createtestimonial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $testimonial = new Testimonial;
        $testimonial->user_id = $user_id;
        $testimonial->client_name = $request->input('client_name');
        $testimonial->message = $request->input('message');
        $testimonial->save();

        return redirect()->route('testimonials')->with('success', 'Testimonial Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonials = Testimonial::find($id);

        return view('clients.testimonials.edittestimonials')->with('testimonials' , $testimonials);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->client_name = $request->input('client_name');
        $testimonial->message = $request->input('message');

        $testimonial->update();

        return redirect()->route('testimonials')->with('success' , 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->delete();

        return redirect()->route('testimonials')->with('success' , 'Deleted!!');
    }
}
