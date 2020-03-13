<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\users;

class Acontroller extends Controller
{

    public function show()
    {

      return view('adduserform');
    }

    public function add(Request $request)
    {
        $user=new users;
        $user->fname=$request->firstname;
        $user->lname=$request->lastname;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->group_id='1';
        $user->save();
        return back();
    }


    public function showusers(request $request)
   {

       $users=DB::table('users')->get();
       
       return view('showusers',compact('users'));
   }

 

}
