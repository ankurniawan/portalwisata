<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Konten;


class PortalController extends Controller
{
	public function index()
		 {
		 	$data_prambanan = \App\Konten::all();
		 	return view ('prambanan', ['data_prambanan' => $data_prambanan]);
		 }   //

    public function create() {
		$contacts = Contact::all();
		return view('maps', compact('contacts'));
		 //
		}
	

	public function post(Request $request)
	{

		\App\Contact::create($request ->all());
		return redirect('/maps');
					
	}

}

