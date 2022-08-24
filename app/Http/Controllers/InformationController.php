<?php

namespace App\Http\Controllers;
use App\Models\Information;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $informations = Information::all();
        return view('index',compact('informations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'location' => 'required',
        ]);

        $information = new Information;
        $information->name = $request->name;
        $information->email = $request->email;
        $information->location = $request->location;
        $information->save();
        
        return redirect()->route('info.index')->with('success','Informations saved');
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
        $information = Information::find($id);
        return view('edit', compact ('information'));
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
        $information = Information::find($id);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'location' => 'required',
        ]);

        
        $information->name = $request->name;
        $information->email = $request->email;
        $information->location = $request->location;
        $information->save();
        
        return redirect()->route('info.index')->with('success','Informations Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $information = Information::find($id);
        $information->delete();
        return redirect()-route('info.index')->with('success','Information Deleted');

    }
}
