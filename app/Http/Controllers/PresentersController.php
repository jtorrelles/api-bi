<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presenters;

class PresentersController extends Controller
{
    //
	public function index()
    {
        return Presenters::all();
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Presenters::find($id);
    }  
}
