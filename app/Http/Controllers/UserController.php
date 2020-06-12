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


if (\Gate::allows('isAdmin')) {
    echo 'Admin user role is allowed';
} else {
    echo 'Admin are not allowed not allowed';
}


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






}
