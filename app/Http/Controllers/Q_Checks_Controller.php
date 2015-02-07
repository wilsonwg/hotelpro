<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\q_check;
use App\Inspector;
use App\Http\Requests\CreateQ_CheckRequest;


use App\problem;
use App\complain;
use App\ToDo;
use App\freezer;
use App\rental;

class Q_Checks_Controller extends Controller {

	public function __construct(){
		$problem_count = count(problem::wherecase_status(1)->get());
		$complain_count = count(complain::wherecase_status(1)->get());
		$todo_count = count(ToDo::wherecase_status(1)->get());
		$freezer_count = count(freezer::wherecase_status(1)->get());
		$rental_count = count(rental::wherecase_status(1)->get());
		view()->share(compact('problem_count'));
		view()->share(compact('complain_count'));
		view()->share(compact('todo_count'));
		view()->share(compact('freezer_count'));
		view()->share(compact('rental_count'));
	}


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

		return View('q_checks.create',compact('room_no','inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateQ_CheckRequest $request, q_check $q_check)
	{
		$q_check->create($request->all());
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
		$q_checks = q_check::find($room_no);
		return View('q_checks.show',compact('q_checks'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(q_check $q_check)
	{
		$inspectors = Inspector::lists('name', 'id');

		return view('q_checks.edit', compact('q_check','inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(q_check $q_check, Request $request)
	{
		$q_check->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(q_check $q_check)
	{
		$q_check->delete();
		return redirect('/room_reports/'.$q_check->room_no);
	}

}
