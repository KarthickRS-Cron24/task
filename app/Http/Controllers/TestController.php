<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        echo "<br>Test Controller";
    }
    public function Store(Request $request)
    {
        $token=$request -> _token;
        echo $token.'<br>';
        $name=$request -> input('name');
        echo 'Name:'.$name.'<br>';

        $username = $request -> username;
        echo "Username:".$username.'<br>';

        $password = $request -> password;
        echo "Password:".$password.'<br>';
    }
    public function nameStore(Request $request)
    {
        echo $name;
    }
}   
