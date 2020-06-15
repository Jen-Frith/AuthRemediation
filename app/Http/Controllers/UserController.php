<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{


public function index(){

    $randomUsers = User::orderByRaw('RAND()')->take(5)->get();
    $filtered = DB::table('users')->whereRaw('length(name) < 6')->get();
    
    // dd($filtered);
    
    $users=User::all()   ;
    $lastUsers = $users->sortBy('key')->take(-3);
   
    
return view('users/index', compact('users', 'randomUsers', 'lastUsers', 'filtered'));


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
    $this->authorize('edit', $user);
   
}


public function destroy(){

   
      $this->authorize('destroy', $user);
      // The current user can delete the post
   
}






}
