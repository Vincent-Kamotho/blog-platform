<?php

namespace App\Http\Controllers\Resume;

use App\Models\Resume\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
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

        $work = new Work;
        $work->user_id = $user_id;
        $work->company_name = $request->input('company_name');
        $work->role = $request->input('role');
        $work->employment_type = $request->input('employment_type');
        $work->location = $request->input('location');
        $work->start_date = $request->input('start_date');
        $work->end_date = $request ->input('end_date');
        $work->save();

        return redirect()->route('my_resume')->with('success' , 'Experience added Successfully');
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
        $works = Work::find($id);

        return view('clients.resume.editresumework')->with('works' , $works);
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
        $work = Work::find($id);
        $work->company_name = $request->input('company_name');
        $work->role = $request->input('role');
        $work->employment_type = $request->input('employment_type');
        $work->location = $request->input('location');
        $work->start_date = $request->input('start_date');
        $work->end_date = $request ->input('end_date');
        $work->update();
        return redirect()->route('my_resume')->with('success', 'Experience Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);

        $work->delete();

        return redirect()->route('my_resume')->with('success', 'Experience Deleted');
    }
}
