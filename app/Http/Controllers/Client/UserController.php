<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        return view('client.profile');
    }

    public function update(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'numeric',
        ]);

        $user = User::find(auth()->id());

        $user->update([
            'name' => $request->name,
            'phone' => $request->phone,
        ]);
        notify()->success('Profil berhasil di perbarui');
        return back();
    }

    public function security() {
        return view('client.security');
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'password' => 'min:6',
            'password_confirm' => 'same:password'
        ]);

        $user = User::find(auth()->id());

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        notify()->success('Password berhasil diperbarui');
        return back();
    }
}
