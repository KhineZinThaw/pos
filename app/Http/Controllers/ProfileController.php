<?php

namespace App\Http\Controllers;
use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

   
    public function create()
    {
        $profile = new Profile();
        return view('profile.create', compact('profile'));
    }

    
    public function store(Request $request)
    {
        Profile::create($request->all());
        return redirect('/profile');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
