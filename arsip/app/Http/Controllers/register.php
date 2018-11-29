<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class register extends Controller
{
  public function storeroommaster(Request $request)
  {
    $file = $request->file;
    $data = getimagesize($file);
    $width = $data[0];
    $height = $data[1];
    if ($height > 5000) {
      return back()->with('fail', 'Cant Upload Image With Height More Than 5000');
    }
    else if($height < 100){
      return back()->with('fail', 'Cant Upload Image With Height Less Than 100');
    }
    $destinationPath = "images";
    $extension = $file->getClientOriginalExtension();
    $fileName = time().".".rand(1111,9999).".".$extension;
    $image = $fileName;
    //
    $file->move($destinationPath, $fileName);
    $roommaster = new Roommaster;
    $roommaster->type = $request->type;
    $roommaster->price = $request->price;
    $roommaster->unitprice = $request->unitprice;
    $roommaster->image = $image;
    $roommaster->description = $request->description;
    $roommaster->status = 2;
    $roommaster->createdby = 1;
    $roommaster->save();

    //go back with session success alert
    return back()->with('success', 'Room has been added');
  }
  
    public function storeregister(Request $request){
      Validator::make($request->all(),[
        'fullname' => 'required|max:50',
        'username' => 'required|unique:users',
        'password' => 'required|min:6'
      ], [
        'fullname.max' => 'Fullname must be less than 50 letters',
        'username.unique' => 'Username is already registered, please fill it with another username',
        'password.min' => 'Password must be more than 6 letters'
      ])->validate();

      $user = new User();
      $user->fullname = $request->fullname;
      $user->username = $request->username;
      $user->password = bcrypt($request->password);
      $user->level = $request->level;
      $user->save();

      Auth::login($user);
      //
      // if (Auth::check()) {
      //   dd(Auth::user()->fullname);
      // }
      return back();

    }
}
