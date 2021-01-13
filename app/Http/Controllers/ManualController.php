<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ManualController extends Controller
{
    public function manualValidation(Request $req)
    {
        echo "jd";
        $valid=Validator::make($req->all(),[
            'username' => 'required|min:4',
            'password' => 'required'
        ]);
    
        if($valid -> fails())
        {
            return redirect('check')->withErrors($valid)->withInput();
        }
    }
}
