<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Validator;
use App\User;

class login extends Controller
{
    public function trylogin(Request $request){

      Validator::make($request->all(),[
        'username' => 'required',
        'password' => 'required|min:6'
      ], [
        'password.min' => 'Password must be more than 6 letters',
      ])->validate();

      if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        return redirect('index');
      }
      else{
        dd('sss');
      }
    }
}
