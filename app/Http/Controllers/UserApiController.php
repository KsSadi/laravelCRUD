<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    //
    public function showUser($id=null){
        if($id==''){
            $users = User::get();
            return response()->json(['user'=>$users],200);
        }
        else{
            $users = User::find($id);
            return response()->json(['user'=>$users],200);
        }
    }

    public function addUser(Request $request)
    {
        if($request->isMethod('post'))
        {

            $data = $request->all();
            // return $data;
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->save();
            $msg = "Data inserted";
            return response()->json(['msg'=>$msg],201);
        }
    }

}
