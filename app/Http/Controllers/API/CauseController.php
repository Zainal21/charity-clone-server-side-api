<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Http\Controllers\API\ResponseFormatter;

use App\Model\cause;
class CauseController extends Controller
{
    public function index(Request $req)
    {
        $_cause = cause::all();
        if($_cause){
            return ResponseFormatter::success($_cause,'Data Cause Berhasil diambil');
        }

    }
    public function show($id)
    {
        $_cause = cause::find($id);
        if($_cause){
            return ResponseFormatter::success($_cause,'Data Cause Berhasil diambil');
        }else{
            return ResponseFormatter::error(null,'Data Cause Berhasil diambil', 404);
        }
    }
}
