<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venues;

class VenuesController extends Controller
{
    //
	public function index()
    {
        return Venues::all();
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Venues::find($id);
    }  
}
