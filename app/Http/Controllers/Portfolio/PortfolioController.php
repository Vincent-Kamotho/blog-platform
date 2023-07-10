<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Models\Portfolio\Portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
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

        $portfolios = Portfolio::where('user_id' , $user_id)->get();
        return view('clients.portfolio.portfolio')->with('portfolios' , $portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.portfolio.createportfolio');
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

        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $portfolio = new Portfolio;
        $portfolio->user_id = $user_id;
        $portfolio->project_name = $request->input('project_name');
        $portfolio->image = 'images/' . $imageName;
        $portfolio->save();

        return redirect()->route('myportfolio')->with('success' , 'Portfolio Successfully Added');
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
        $portfolio = Portfolio::find($id);

        return view('clients.portfolio.editportfolio')->with('portfolio' , $portfolio);
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
        $portfolio = Portfolio::find($id);
        $portfolio->project_name=$request->input('project_name');
        $portfolio->update();
        return redirect()->route('myportfolio')->with('success', 'Portfolio Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route('myportfolio')->with('success', 'Successfully Deleted!!');
    }
}
