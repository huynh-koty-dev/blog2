<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberContoller extends Controller
{
    //
    public function show()
    {
        $data =  Member::paginate(4);
        return view('list',['data'=>$data]);
    }
    public function add(Request $req){
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('list');
    }
    public function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }
    public function update(Request $req){       
        $member = Member::find($req->id);
        $member->name = $req->name;
        $member->email = $req->email;
        $member->address = $req->address;
        $member->save();
        return redirect('list');
    }
    public function showData($id){
        $data = Member::find($id);
        return view('update',['data'=>$data]);
    }
}
