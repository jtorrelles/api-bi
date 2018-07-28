<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contracts;

class ContractsController extends Controller
{
    //
	public function index()
    {
        return Contracts::all();
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Contracts::find($id);
    }      
}
