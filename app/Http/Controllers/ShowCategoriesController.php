<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowCategories;

class ShowCategoriesController extends Controller
{
    //
	public function index()
    {
        return ShowCategories::all();
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ShowCategories::find($id);
    }  
}
