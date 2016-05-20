<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KnowledgeController extends Controller
{
    public function index()
	{
    	$knowledges = Knowledge::all();

    	return view('knowledge.index')->withKnowledge($knowledge);
	

	$contributors = contributor::lists('firstName','lastName','id');
		}
    public function edit($id)
	{
	    $knowledge = Knowledge::findOrFail($id);

	    return view('knowledge.edit')->withKnowledge($knowledge);
	}
}
