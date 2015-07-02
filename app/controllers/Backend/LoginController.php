<?php

class Backend_LoginController extends BackendController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

        public function login(){
            
            return View::make('backend.login.login');
        }
        
        
        public function logout(){
            if(Auth::check()) Auth::logout(); 
            
            return Redirect::to('/'); 
        }
        
        
        public function loginpost(){
            $validate=Validator::make(Input::all(),User::$rules);
            $mesaj=$validate->messages();
            if($validate->fails())
                { 
                return Redirect::back()->with(array('mesaj'=>'true','title'=>'Doğrulama Hatası','text'=>''.$mesaj->first().'','type'=>'error'));
                }
            
            if(Auth::attempt(array('email'=>Input::get('email'),'password'=>Input::get('password')),Input::get('remember'))){
                   /*Kullanıcı girişi*/   
                    return  Redirect::intended('panel');
            }
            
            else{
                return Redirect::back()->with(array('mesaj'=>'true','title'=>'Giriş Hatası','text'=>'Email adresiniz veya şifreniz yanlış','type'=>'error'));
            }
            
        }

}
