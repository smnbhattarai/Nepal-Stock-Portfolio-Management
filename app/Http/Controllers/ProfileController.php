<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
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
        //
    }

    /**
     * @param Profile $profile
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
    }

    /**
     * @param Profile $profile
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request, Profile $profile)
    {

        if ($request->hasFile('avatar')) {
            Storage::disk('public')->delete($profile->avatar);
            $profile->avatar = Storage::disk('public')->put('avatars', $request->file('avatar'));
        }

        $profile->name = $request->name;
        $profile->birth_day = $request->birth_day;
        $profile->birth_month = $request->birth_month;
        $profile->birth_year = $request->birth_year;
        $profile->profession = $request->profession;
        $profile->bio = $request->bio;
        $profile->country = $request->country;
        $profile->address = $request->address;
        $profile->phone = $request->phone;
        $profile->website = $request->website;
        $profile->linkedin = $request->linkedin;
        $profile->twitter = $request->twitter;
        $profile->facebook = $request->facebook;
        $profile->youtube = $request->youtube;

        $profile->save();

        return redirect()->route('profile.show', $profile)->withSuccess('Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
