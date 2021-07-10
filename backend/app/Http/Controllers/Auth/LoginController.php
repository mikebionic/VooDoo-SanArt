<?php


namespace App\Http\Controllers\Auth;

class LoginController
{
    public function login()
    {
        if (auth()->check()) return redirect()->route('app.home')->with('warning', __('auth.already_logged_in'));
        return view('auth.login');
    }

    public function loginCheck(\Illuminate\Http\Request $request)
    {
        $data = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        if (!auth()->guard()->attempt([
            'email' => $data['login'],
            'password' => $data['password']
        ])) {
            return redirect()->route('auth.login')->with('warning', __('auth.failed'))->withInput();
        }
        return redirect()->route('app.home')->with('success', __('auth.success', ['user' => optional(auth()->user())->name]));
    }

    public function logout()
    {
        if (!auth()->check()) return redirect()->route('auth.login');
        $user = auth()->user()->name;
        auth()->logout();
        return redirect()->route('app.home')->with('success', __('auth.logged_out', ['user' => $user]));
    }
}
