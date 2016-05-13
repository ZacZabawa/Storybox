<?php

namespace App\Http\Controllers;
use App\Contributor;
use App\media;
use App\tekpoint;
use Request;
use App\community;
use Html;
 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;

class MediaController extends Controller
{
     /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entries = media::all();
		$contributors = contributor::lists('firstName');
		$tekpoints = tekpoint::lists('ident');
		$communities = community::lists('name');
 				return view('media', compact('communities','contributors', 'tekpoints', 'entries','HTML'));
	}
 
	public function add() {
 		


		$file = Request::file('filefield');
		$extension = $file->getClientOriginalExtension();
		Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));
		$entry = new media();
		$entry->mime = $file->getClientMimeType();
		$entry->original_filename = $file->getClientOriginalName();
		$entry->filename = $file->getFilename().'.'.$extension;
 
		$entry->save();
 
		return redirect('media');
		
	}

	public function get($filename){
	
		$entry = media::where('filename', '=', $filename)->firstOrFail();
		$file = Storage::disk('local')->get($entry->filename);
 
		return (new Response($file, 200))
              ->header('Content-Type', $entry->mime);
	}
}
