<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\CookieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
class Service
{
   
}

Route::get('/', function () {
    return view('welcome');
});
Route::get('id',function() {
    echo '<br>Hello';
 });

 Route::get('id={id}',function($id){
    echo "<br>id".$id;
 })->middleware('role:editor');
//  Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});

//  Route::get('user/profile', 'TestController@showProfile')->name('profile');


 
 Route::get('/service', function (Service $service) {
    die(get_class($service));
});

Route::get('conference',function(){
    $year=Request::get('year');
    // echo "Year:".$year;
    return app('request')->get('year');
});

Route::get('/usser',function()
{
    return view('register');
});
Route::get('/name',function()
{
    return view('validation');
});

Route::post('ussser/register',[TestController:: class, 'Store']);

Route::get('name/register',[TestController:: class, 'nameStore']);

Route::get('/homedash', function () {
    return redirect()->route('user');
});

Route::get('/home', function () {
    return redirect()->away('https://www.google.com');
});

Route::get('/current', function()
{
    return URL::full();
});
Route::get('the/best/avenger', array('as' => 'ironman', function()
{
    return 'Tony Stark';
}));

Route::get('example', function()
{
    return URL::route('ironman');
});



Route::post('check',[ValidationController:: class, 'validationForm']);
Route::view('validation','check');


Route::post('user',[ValidationController::class, 'validationForm']);
Route::view('session','session');

Route::view('profile','profile');

Route::get('/logout',function()
{
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('profile');
});


Route::get('cookie/set',[CookieController::class, 'setCookie']);
Route::get('cookie/get',[CookieController::class, 'getCookie']);