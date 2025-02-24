<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function login()
    {


        return view('auth.login');
    }

    public function signup()
    {


        return view('auth.signup');
    }


    public function store()
    {

        $validated = request()->validate([
            'name' => 'required|min:3|max:100',
            'email' => 'required|email|unique:users,email,except',
            'password' => 'required|confirmed'


        ]);

        $sing =  User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])

        ]);
        return redirect()->route('login');
    }

    public function authenticate()
    {

        $validated = request()->validate([

            'email' => 'required',
            'password' => 'required'

        ]);

        if (Auth::attempt($validated)) {
            request()->session()->regenerate();
            return redirect()->route('show')->with('success', 'برافو عليك');
        } else {


            return redirect()->route('login');
        }
    }


    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function edit_profile(){

return view('profile.edit_profile');
    }




    public function edit_save(Request $request){

        $profile = Auth::user();
 $validated = $request->validate([
    'name' => 'required|string',
    'image_cover' => 'nullable|image',
    'image_profile' => 'nullable|image',
]);




if ($request->hasFile('image_profile')) {
    $img_profile = $request->file('image_profile');
    $imgNameProfile = time() . '.' . $img_profile->getClientOriginalExtension();
    $img_profile->move('img', $imgNameProfile);
    $profile->update([
        'image_profile' => $imgNameProfile 
    ]);
}

if ($request->hasFile('image_cover')) {
    $img_cover = $request->file('image_cover');
    $imgNameCover = time() . '.' . $img_cover->getClientOriginalExtension();
    $img_cover->move('img', $imgNameCover);

    $profile->update([
        'image_cover' => $imgNameCover
    ]);
}



$profile->update([
    'name' => $request->name,
]);

return redirect()->route('profile');

    }



}
