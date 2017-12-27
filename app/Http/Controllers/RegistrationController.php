<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    
   public function create()
   {
     return view('registration.create');
   }

   	 public function store()
   	 {
   	  
      $this->validate(request(), [
         'email' => 'required|email',
         'name' => 'required|min:2',
         'password' => 'required'
      ]);

     $user = User::create(request(['email', 'name', 'password']));
      
     auth()->login($user);

     return redirect()->home();

   	 }



}
