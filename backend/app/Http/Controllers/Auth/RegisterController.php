<?php


namespace App\Http\Controllers\Auth;


use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerCheck(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => ['required', 'min:8', 'max:8'],
            'location' => ['nullable', 'exists:locations,id'],
            'email' => ['nullable', 'email'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        $user = new User();
        $user->name = $data['name'];
        $user->phone = $data['phone'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        if ($data['location']) {
            $user->location()->associate(Location::find($data['location']));
        }
        $user->save();
        return redirect()->route('auth.login')->with('success', __('auth.registered', ['user' => $user->name]));
    }
}
