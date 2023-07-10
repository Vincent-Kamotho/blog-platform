<?php

namespace App\Http\Controllers\Bio;

use App\Models\Bio\Bio;
use App\Models\Bio\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BioController extends Controller
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

        $bio = Bio::where('user_id' , $user_id)->get();
        return view('clients.bio.viewbio', compact('bio' , $bio));
        //return view('clients.Bio.viewbio')->with('bio', $bio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.bio.createbio');
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

        $bio = new Bio;
        $bio->user_id = $user_id;
        $bio->bio = $request->input('bio');
        $bio->save();

        return redirect()->route('mybio')->with('success', 'Bio Added Successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createskill()
    {
        $user = Auth::user();
        $user_id = $user->id;

        $skills = Skill::where('user_id' , $user_id)->get();
        return view('clients.Bio.listskills')->with('skills', $skills);
    }

    public function addskill()
    {
        return view('clients.Bio.addskill');
    }

    public function saveskill(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;

        $skill = new Skill;
        $skill->user_id = $user_id;
        $skill->skill = $request->input('skill');
        $skill->percentage_prowess = $request->input('number');
        $skill->save();

        return redirect()->route('skills')->with('success', 'Skill successfully added');
    }

    public function editskill($id)
    {
        $skills = Skill::find($id);
        return view('clients.Bio.editskill')->with('skills' , $skills);
    }

    public function updateskill(Request $request , $id)
    {
        $skills = Skill::find($id);
        $skills->skill=$request->input('skill');
        $skills->percentage_prowess=$request->input('number');
        $skills->update();
        return redirect()->route('skills')->with('success', 'Skill Successfully Updated');
    }
    
    public function deleteskill($id)
    {
        $skills = Skill::find($id);
        $skills->delete();
        return redirect()->route('skills')->with('success', 'Successfully Deleted!!');
    }
}
