<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestValidation;


class ValidationController extends Controller
{
    public function showForm(){
        return view('name');
    }
    public function validationForm(FormRequestValidation $request)
    {
           
      $validated=$request->validated();
    }
}
