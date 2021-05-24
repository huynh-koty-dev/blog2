<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMemberController extends Controller
{
    //

    public function addMember(Request $req){
        $data = $req->input('user');
        $req->session()->flash('user',$data);
        return redirect('addMember'); 
    }
}
