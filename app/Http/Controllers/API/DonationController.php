<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\donation;
use App\Model\cause;
use App\Http\Controllers\API\ResponseFormatter;

class DonationController extends Controller
{
    public function donation(Request $req)
    {   
        // store donation item
        $donation = donation::create([
            'causes_id' => $req->input('causes_id'),
            'name' => $req->input('name'),
            'email'=> $req->input('email'),
            'total_donation'=> $req->input('total_donation'),
        ]);
        // check cause item berdasar kan input ID cause donation
        $cause = cause::find($donation->causes_id);
        // check nominal
        if($donation->total_donation > $cause->goal){
            return ResponseFormatter::error(null, 'Donasi Gagal, Silahkan Cek Nominal Yang anda masukan');
        }else{
            // update goal cause
            $total = $cause->update([
                'goal' => $cause->goal - $donation->total_donation
             ]);
            return ResponseFormatter::success($total, 'Donasi Berhasil, Terimakasih');
        }
    }
}
