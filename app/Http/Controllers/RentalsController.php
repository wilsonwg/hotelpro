<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Inspector;
use App\rental;
use App\Http\Requests\CreateRentalRequest;

class RentalsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(rental $rental)
	{
		$unsolved_rentals = DB::table('rentals')->where('case_status', '=', 1)->get();
		//$unsolved_rentals = $rentals->wherecase_status(1)->get();
		//$resolved_rentals = $rentals->wherecase_status(0)->get();
		$resolved_rentals = DB::table('rentals')->where('case_status', '=', 0)->get();
		return view('rentals.index', compact('unsolved_rentals', 'resolved_rentals'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('rentals.create', compact('inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateRentalRequest $request, rental $rental)
	{
		$rental->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/rentals');
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
	public function edit(rental $rental)
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('rentals.edit', compact('rental', 'inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(rental $rental, Request $request)
	{
		$rental->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/rentals');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(rental $rental)
	{
		$rental->delete();
		return redirect('/rentals');
	}

}
