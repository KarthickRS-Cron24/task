<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ValidationController extends Controller
{
    public function showForm(){
        return view('name');
    }
    public function validationForm(Request $request)
    {
        
        $data = $request->input();
        print_r( $data);
        $validated = $request->validate([
            'username' => 'required',        
            'password' => 'required'    
      ]);
      
      $request-> session()->push($data);
      echo session('user');
      return redirect('profile');
    }
}
