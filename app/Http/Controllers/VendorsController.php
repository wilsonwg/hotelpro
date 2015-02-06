<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\vendor;
use App\Http\Requests\CreateVendorRequest;

class VendorsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(vendor $vendor)
	{
		//$vendors = DB::table('rentals')->get();
		//$unsolved_rentals = $rentals->wherecase_status(1)->get();
		//$resolved_rentals = $rentals->wherecase_status(0)->get();
		//$resolved_rentals = DB::table('rentals')->where('case_status', '=', 0)->get();
		$vendors = $vendor->get();
		return view('vendors.index', compact('vendors'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('vendors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateVendorRequest $request, vendor $vendor)
	{
		$vendor->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/vendors');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(vendor $vendor)
	{
		return view('vendors.edit', compact('vendor'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(vendor $vendor, Request $request)
	{
		$vendor->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/vendors');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(vendor $vendor)
	{
		$vendor->delete();
		return redirect('/vendors');
	}

}
