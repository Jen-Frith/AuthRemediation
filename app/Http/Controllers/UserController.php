<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{


public function index(){
 $users=User::all()   ;

return view('users/index', compact('users'));

}

public function create(){

    dd('register');
}


public function edit(){

    dd('edit');
}


public function destroy(){

    dd('delete');
}


public function profile(){

return view ('profile', array('user'=>Auth::user()));

}




}
