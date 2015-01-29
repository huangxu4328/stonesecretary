<?php

class HomeController extends BaseController {

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

	public function index($name){
		echo $name;
//    return View::make('hello');
	}

	public function aboutus($name, $culture){
		echo $name.'----'.$culture.'----aboutus!';
	}

	public function productList($name, $id){
		echo $name.'---'.$id.'---productList';
	}

	public function productInfo($name, $id, $pid){
		echo $name.'---'.$id.'----'.$pid.'---productList';
	}

}
