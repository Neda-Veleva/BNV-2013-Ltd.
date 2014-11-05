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

	public function homePage()
	{
            $categories = Category::all();
            return View::make('index')->with('categories', $categories);
	}
        
        public function contacts()
	{
            return View::make('contact');
	}
        
        public function profile()
	{
            return View::make('profile');
	}
        
        public function news()
	{
            return View::make('news');
	}
}
