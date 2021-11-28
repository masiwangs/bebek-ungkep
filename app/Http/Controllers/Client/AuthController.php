<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerView() {
        return view('client.register');
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'same:password'
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 1
        ]);

        UserRole::create([
            'user_id' => $user->id,
            'role_id' => 1
        ]);

        notify()->success('Pendaftaran berhasil. Silahkan login.');
        return redirect()->route('client.login');
    }

    public function loginView() {
        return view('client.login');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            return back()->withErrors(['email' => 'Email belum terdaftar']);
        }

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('client.index');
        }

        notify()->error('Password salah');
        return back();
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
