<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Inspector;
use App\freezer;
use App\Http\Requests\CreateFreezerRequest;

class FreezersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(freezer $freezer)
	{
		$unsolved_freezers = DB::table('freezers')->where('case_status', '=', 1)->get();
		//$unsolved_freezers = $freezers->wherecase_status(1)->get();
		//$resolved_freezers = $freezers->wherecase_status(0)->get();
		$resolved_freezers = DB::table('freezers')->where('case_status', '=', 0)->get();
		return view('freezers.index', compact('unsolved_freezers', 'resolved_freezers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('freezers.create', compact('inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateFreezerRequest $request, freezer $freezer)
	{
		$freezer->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/freezers');
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
	public function edit(freezer $freezer)
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('freezers.edit', compact('freezer', 'inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(freezer $freezer, Request $request)
	{
		$freezer->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/freezers');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(freezer $freezer)
	{
		$freezer->delete();
		return redirect('/freezers');
	}

}
