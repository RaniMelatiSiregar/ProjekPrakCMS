<?php

namespace App\Http\Controllers;
use App\Models\Profiles;
use Illuminate\Http\Request;


class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profiles::all();
        return view ('curdprofile', ['profiles'=>$profiles]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.createprofile');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'biografi' => 'required'
        ]);

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->biografi), 200);

        Profiles::create($validatedData);

        return redirect('/dashboard/profiles')->with('success', 'New Portofolio has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profiles $profile)
    {
        return view('layouts.showprofile', ['profiles' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profiles $profile)
    {
        return view('layouts.editprofile', [
            'profiles' => $profile,
            // 'categories' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profiles $profile)
{
    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'biografi' => 'required'
    ]);

    $profile->update($validatedData);

    return redirect('/dashboard/profiles')->with('success', 'Portofolio has been updated!');
}


    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Profiles $profile)
{
    $profile->delete();
    return redirect('/dashboard/profiles')->with('success', 'Portofolio has been deleted!');
}


    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Profiles::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }

}
