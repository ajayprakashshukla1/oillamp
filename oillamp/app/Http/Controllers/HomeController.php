<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use DB;
use Excel;
use Mail;
use App\Xlsx\Xlsx;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
        $this->middleware('auth');
    }


//==============================================

public function dashboard(){
   $data= array(); 
   return view('home.dashboard')->with('data',$data);
}

//===============================================  
}?>