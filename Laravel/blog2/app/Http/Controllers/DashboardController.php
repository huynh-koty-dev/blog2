<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class DashboardController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard.index');
    }
    public function loginForm(Request $request){
       $mang=[
        $request->email,
        $request->pass
       ];
        return response( $mang); 
       
    }
}

