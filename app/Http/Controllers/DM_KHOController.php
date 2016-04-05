<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\DM_KHO;

use Response;

class DM_KHOController extends Controller
{
	public function index() {
		$results = DM_KHO::all();

		return Response::json($results);
	}  

	public function show($id) {
		$result = DM_KHO::find($id);

		return Response::json($result);
	}

	public function store(Request $request) {
		$result = new DM_KHO;

		$result->TEN_KHO = $request->TEN_KHO;
		$result->VI_TRI = $request->LIEN_HE;
		$result->LIEN_HE = $request->LIEN_HE;
		$result->GHI_CHU = $request->GHI_CHU;
		
		$result->save();

		return "create successfully ";
	}

	public function update(Request $request, $id) {
		$result = DM_KHO::find($id);

		$result->TEN_KHO = $request->TEN_KHO;
		$result->VI_TRI = $request->LIEN_HE;
		$result->LIEN_HE = $request->LIEN_HE;
		$result->GHI_CHU = $request->GHI_CHU;

		$result->save();

		return "update successfully ";
	}

	public function delete(Request $request) {
		$result = DM_KHO::find($request->input('id'));

		$result->delete();

		return "delete successfully ";
	}
}
