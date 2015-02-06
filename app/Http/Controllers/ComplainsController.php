<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Inspector;
use App\complain;
use App\Http\Requests\CreateComplainRequest;

class ComplainsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(complain $complain)
	{
		$unsolved_complains = DB::table('complains')->leftjoin('inspector', 'complains.reporter', '=', 'inspector.id')->select('complains.*', 'inspector.name')->where('case_status', '=', 1)->get();
		//$unsolved_complains = $complain->wherecase_status(1)->get();
		//$resolved_complains = $complain->wherecase_status(0)->get();
		$resolved_complains = DB::table('complains')->leftjoin('inspector', 'complains.reporter', '=', 'inspector.id')->select('complains.*', 'inspector.name')->where('case_status', '=', 0)->get();
		return view('complains.index', compact('unsolved_complains', 'resolved_complains'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('complains.create', compact('inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatecomplainRequest $request, complain $complain)
	{
		$complain->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/complains');
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
	public function edit(complain $complain)
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('complains.edit', compact('complain', 'inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(complain $complain, Request $request)
	{
		$complain->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/complains');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(complain $complain)
	{
		$complain->delete();
		return redirect('/complains/');
	}

}
