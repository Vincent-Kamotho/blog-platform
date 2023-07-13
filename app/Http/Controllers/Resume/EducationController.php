<?php

namespace App\Http\Controllers\Resume;

use Illuminate\Http\Request;
use App\Models\Resume\Education;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $education = new Education;
        $education->user_id = $user_id;
        $education->education_level = $request->input('education_level');
        $education->institution_name = $request->input('institution');
        $education->start_date = $request->input('start_date');
        $education->end_date = $request->input('end_date');
        $education->save();

        return redirect()->route('my_resume')->with('success', 'Education Entry Added');
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
        $education = Education::find($id);

        return view('clients.resume.editresumeeducation')->with('education' , $education);
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
        $education = Education::find($id);
        $education->education_level = $request->input('education_level');
        $education->institution_name = $request->input('institution');
        $education->start_date = $request->input('start_date');
        $education->end_date = $request->input('end_date');
        $education->update();
        return redirect()->route('my_resume')->with('success', 'Education Entry Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);

        $education->delete();

        return redirect()->route('my_resume')->with('success', 'Education Entry Deleted');
    }
}
