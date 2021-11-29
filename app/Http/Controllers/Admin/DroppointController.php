<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DroppointAddress;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DroppointController extends Controller
{
    public function all() {
        $drop_points = User::where('role_id', 4)->orderBy('name')->get();
        return view('admin.droppoint.list', compact('drop_points'));
    }

    public function create() {
        return view('admin.droppoint.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'road' => 'required',
            'village' => 'required',
            'subdistrict' => 'required',
            'city' => 'required',
            'province' => 'required',
            'postalcode' => 'required'
        ]);
        
        $drop_point = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'role_id' => 4,
            'password' => Hash::make($request->password)
        ]);

        $drop_point_address = DroppointAddress::create([
            'drop_point_id' => $drop_point->id,
            'road' => $request->road,
            'village' => $request->village,
            'subdistrict' => $request->subdistrict,
            'city' => $request->city,
            'province' => $request->province,
            'postalcode' => $request->postalcode
        ]);

        notify()->success('Droppoint berhasi disimpan');
        return redirect()->route('admin.droppoint.index');
    }
}
