<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\donation;
use App\Model\cause;
use App\User;
class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard',[
            'donation' => donation::latest()->get(),
            'total_donate' => donation::count(),
            'donate_totals' => donation::sum('total_donation'),
            'causes' => cause::count(),
            'user' => User::count(),
        ]);
    }
}
