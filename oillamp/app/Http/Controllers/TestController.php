<?php 
namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use DB;
use Excel;
use Mail;
use App\Xlsx\Xlsx;

use App\User;


require_once('/home/admin/web/clientwork.jtplcloud.com/public_html/oillamp/app/twitter_login/vendor/autoload.php');
use Abraham\TwitterOAuth\TwitterOAuth; 

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { 
        //$this->middleware('auth');
    }


//==============================================

/*
public function test(){
   //echo "Hello World"; exit;
    $code=trim($_REQUEST['code']);
    
    $redirect_uri='http://clientwork.jtplcloud.com/oillamp/test';
    $client_id='601c1cacc8cb4e59b378e20ea9b3f59a';
    $client_secret='b50df120dc34404b99c01033120622fd';


    $url = 'https://api.instagram.com/oauth/access_token';
	
	$curlPost = 'client_id='. $client_id . '&redirect_uri=' . $redirect_uri . '&client_secret=' . $client_secret . '&code='. $code . '&grant_type=authorization_code';
	$ch = curl_init();		
	curl_setopt($ch, CURLOPT_URL, $url);		
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);		
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);			
	$data = json_decode(curl_exec($ch), true);	
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);	
	curl_close($ch); 		
	if($http_code != '200')			
		throw new Exception('Error : Failed to receieve access token');
	
    $access_token=$data['access_token'];	
    
    $url = 'https://api.instagram.com/v1/users/self/?access_token=' . $access_token;	

	$ch = curl_init();		
	curl_setopt($ch, CURLOPT_URL, $url);		
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);	
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	$data = json_decode(curl_exec($ch), true);
	$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);	
	curl_close($ch); 
	//if($data['meta']['code'] != 200 || $http_code != 200)
		//throw new Exception('Error : Failed to get user information');

    echo "Data=<pre>";
    print_r($data);
}
*/

public function test(){
  
    $config=[
        //
        'consumer_key'      => 'JkJwlSHe0tN0odr4pyqeHuOw8',
        'consumer_secret'   => 'vaPFFpvuWDNssdR9PIWTtkqyvhk1UNBqzs79TF7DYSQGPohtLd',
     
        //
        'url_login'         => 'http://clientwork.jtplcloud.com/oillamp/test',
        'url_callback'      => 'http://clientwork.jtplcloud.com/oillamp/test',
    ];

    // create TwitterOAuth object
    $twitteroauth = new TwitterOAuth($config['consumer_key'], $config['consumer_secret']);
 
    // request token of application
    $request_token = $twitteroauth->oauth(
        'oauth/request_token', [
            'oauth_callback' => $config['url_callback']
        ]
    );
 
    // throw exception if something gone wrong
    if($twitteroauth->getLastHttpCode() != 200) {
        //throw new \Exception('There was a problem performing this request');
    }

    session(['oauth_token' => $request_token['oauth_token']]);
    session(['oauth_token_secret' => $request_token['oauth_token_secret']]);

    // generate the URL to make request to authorize our application
    $url = $twitteroauth->url(
        'oauth/authorize', [
            'oauth_token' => $request_token['oauth_token']
        ]
    );
   
    // and redirect
    if(!isset($_REQUEST['oauth_token'])){
        header('Location: '. $url);
        exit;
    }
    
}

public function test1(){

}

//===============================================  
}?>