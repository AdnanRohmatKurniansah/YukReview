<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show() {
        return view('dashboard.profile', [
            'users' => User::where('id', auth()->user()->id)->first()
        ]);
    }
    public function updateProfile(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'profilePic' => 'image|file|max:2048',
            'birth' => 'required'
        ]);

        
        if ($request->file('profilePic')) {
            if ($request->oldProfilePic) {
                Storage::delete($request->oldProfilePic);
            }
            $validatedData['profilePic'] = $request->file('profilePic')->store('profile-images');
        }

        if($request->file('profilePic')) {
            $validatedData['profilePic'] = $request->file('profilePic')->store('profile-images');
        } 


        User::whereId(auth()->user()->id)
            ->update($validatedData);
        
        return redirect('/dashboard/profile')->with('success', 'Profile has been updated!');
    }
}
