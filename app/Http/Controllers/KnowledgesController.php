<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KnowledgesController extends Controller
{
    public function index()
	{
    	$knowledges = Knowledge::all();

    	return view('knowledge.index')->withKnowledges($knowledges);
	}



    public function edit($id)
	{
	    $knowledge = Knowledge::findOrFail($id);

	    return view('knowledge.edit')->withKnowledge($knowledge);
	}
}
