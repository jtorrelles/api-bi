<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParentCompany;

class ParentCompanyController extends Controller
{
    //
	public function index()
    {
        return ParentCompany::all();
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ParentCompany::find($id);
    }  
}
