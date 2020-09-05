<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\donation;
class DonationController extends Controller
{
    public function index()
    {
        $this->data = [
            'donate' => donation::with('causes')->get()
        ];
        // dd(donation::with('causes')->get());
        return view('pages.donation.index', $this->data);
    }
}
