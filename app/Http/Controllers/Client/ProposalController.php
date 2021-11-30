<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProposalController extends Controller
{
    public function agentCreate() {
        return view('client.proposal.agent');
    }

    public function agentStore(Request $request) {
        $request->validate([
            'ktp' => 'required',
            'kk' => 'required',
            'up_ktp' => 'required',
            'up_selfie' => 'required'
        ]);

        $request->up_ktp->storeAs('ktp', auth()->id().'.jpg');
        $request->up_selfie->storeAs('selfie', auth()->id().'.jpg');

        Proposal::create([
            'user_id' => auth()->id(),
            'ktp' => $request->ktp,
            'kk' => $request->kk,
            'file_ktp' => 'ktp/'.auth()->id().'.jpg',
            'file_selfie' => 'selfie/'.auth()->id().'.jpg',
            'is_approved' => 0
        ]);

        notify()->success('Proposal berhasil diupload');
        return back();
    }
}
