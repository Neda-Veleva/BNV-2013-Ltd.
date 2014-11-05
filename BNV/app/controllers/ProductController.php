<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $categories = Category::all();
            return View::make('products.index')->with('categories', $categories);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $product = Product::find($id);
            
            return View::make('products.show')->with('product', $product);
	}
}
