<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\d_check;
use App\Inspector;
use App\Http\Requests\CreateD_CheckRequest;

class D_Checks_Controller extends Controller {

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

		return View('d_checks.create',compact('room_no','inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateD_CheckRequest $request, d_check $d_check)
	{
		$d_check->create($request->all());
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
		$d_checks = d_check::find($room_no);
		return View('d_checks.show',compact('d_checks'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(d_check $d_check)
	{
		$inspectors = Inspector::lists('name', 'id');

		return view('d_checks.edit', compact('d_check','inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(d_check $d_check, Request $request)
	{
		$d_check->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(d_check $d_check)
	{
		$d_check->delete();
		return redirect('/room_reports/'.$d_check->room_no);
	}

}
