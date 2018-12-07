<?php

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


Route::get('/',function(){
    return  redirect('/login');
});

//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('/login','UserController@login');

$this->get('/dashboard', 'HomeController@dashboard');
$this->get('admin/dashboard', 'AdminController@dashboard');


$this->get('/registration', 'UserController@registration');
Route::post('/registration','UserController@registration');

$this->get('/test', 'TestController@test');
Route::post('/test','TestController@test');



/*
$this->get('/reset_password', 'UserController@reset_password');
Route::post('/reset_password','UserController@reset_password');

$this->get('/resetpassword_success', 'UserController@resetpassword_success');
Route::post('/resetpassword_success','UserController@resetpassword_success');

$this->get('/activation_success', 'UserController@activation_success');
Route::post('/activation_success','UserController@activation_success');
*/


Route::auth();
Route::get('/logout',function(){
	Auth::logout();
	return redirect('/');
});


Route::get('/home', function(){
  return redirect('/dashboard');
});
?>


<?php /*
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/ ?>