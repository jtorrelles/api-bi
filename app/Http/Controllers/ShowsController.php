<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shows;

class ShowsController extends Controller
{
    //
	public function index()
    {
        return Shows::with('categories')->get();
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Shows::find($id);
    } 
}
