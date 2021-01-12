<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function setCookie(Request $request)
    {
        $minute = 1;
        $response = new Response('Hello World');
        $response->withCookie(cookie('name','karthick',$minute));
        return $response;
    }
    public function getCookie(Request $request)
    {
        $value=$request->cookie('name');
        echo $value;
    }
}
