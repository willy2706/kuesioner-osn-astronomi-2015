<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Kuesioner;
// use Request;

class KuesionerController extends Controller {

	public function getIndex() {
		return view('kuesioner.create');
	}

	public function postIndex(Request $req) {
		$k = new Kuesioner;
		$k->fill($req->all());
		$k->save();
		return view ('kuesioner.thanks');
	}

}
