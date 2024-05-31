<?php

namespace App\Http\Controllers;
use App\Models\homes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardHomeController extends Controller
{
    public function index()
    {
    $homes = Homes::all();
    return view('curdhome', ['homes'=>$homes]);
    }

    public function show(Homes $home)
    {
        return view('layouts.showhome', ['home' => $home]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Homes $home)
    {
        return view('layouts.edithome', [
            'home' => $home,
            // 'categories' => category::all()
        ]);
    }

    public function update(Request $request, Homes $home)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'about' => 'required'
    ]);

    $home->update($validatedData);

    return redirect('/dashboard/homes')->with('success', 'home has been updated!');
}

}
