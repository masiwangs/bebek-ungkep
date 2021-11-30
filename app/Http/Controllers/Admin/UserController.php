<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function listProposal() {
        $new_proposals = Proposal::where('is_approved', 0)->get();
        return view('admin.user.new', compact('new_proposals'));
    }

    public function acceptProposal(Proposal $proposal) {
        if($proposal->as == 'agen') {
            $user = User::find($proposal->user_id);
            $user->update([
                'role_id' => 2
            ]);

            UserRole::create([
                'user_id' => $user->id,
                'role_id' => 2
            ]);

            $proposal->update([
                'is_approved' => 1
            ]);

            notify()->success('Proposal berhasil disetujui');
            return back();
        }
    }
}
