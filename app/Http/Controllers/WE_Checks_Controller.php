<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\we_check;
use App\Inspector;
use App\Http\Requests\CreateWE_CheckRequest;

class WE_Checks_Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($room_no)
	{
		$inspectors = Inspector::lists('name', 'id');

		return View('we_checks.create',compact('room_no','inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateWE_CheckRequest $request, we_check $we_check)
	{
		$we_check->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/dashboard');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($room_no)
	{
		$we_checks = we_check::find($room_no);
		return View('we_checks.show',compact('we_checks'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(we_check $we_check)
	{
		$inspectors = Inspector::lists('name', 'id');

		return view('we_checks.edit', compact('we_check','inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(we_check $we_check, Request $request)
	{
		$we_check->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(we_check $we_check)
	{
		$we_check->delete();
		return redirect('/room_reports/'.$we_check->room_no);
	}

}
