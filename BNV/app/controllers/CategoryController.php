<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $categories = Category::all();
            $products = Product::all();
            return View::make('equipments')->with('categories', $categories)->with('products', $products);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $category = Category::find($id);
            return View::make('products.index')->with('category', $category);
	}
}
