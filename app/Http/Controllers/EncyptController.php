<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
class EncyptController extends Controller
{
    public function encrypt(Request $request)
    {
        return Crypt::encryptString('hello');
    }
    public function decrypt(Request $request)
    {
        return Crypt::decryptString('eyJpdiI6IjJrTTV5U2I5UFJ2L1hZRjhGRThIUmc9PSIsInZhbHVlIjoidUt4QlhvaUVqaTZRc1RSTmZhWUp6QT09IiwibWFjIjoiZDcyMzZkOGQ2MDJmMjkwNjM1ZjJlY2JmZjczNGUzMGU3YzliMzE5ZjFlOTFjYzA0ZmE4MGI2YmIzNjk3Njc0YiJ9');
    }
}
