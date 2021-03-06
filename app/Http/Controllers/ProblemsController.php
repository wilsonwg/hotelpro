<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Inspector;
use App\problem;
use App\Http\Requests\CreateProblemRequest;

use App\complain;
use App\ToDo;
use App\freezer;
use App\rental;



class ProblemsController extends Controller {


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
	public function index(problem $problem)
	{
		$unsolved_problems = DB::table('problems')->leftjoin('inspector', 'problems.reporter', '=', 'inspector.id')->select('problems.*', 'inspector.name')->where('case_status', '=', 1)->get();
		//$unsolved_problems = $problem->wherecase_status(1)->get();
		//$resolved_problems = $problem->wherecase_status(0)->get();
		$resolved_problems = DB::table('problems')->leftjoin('inspector', 'problems.reporter', '=', 'inspector.id')->select('problems.*', 'inspector.name')->where('case_status', '=', 0)->get();
		return view('problems.index', compact('unsolved_problems', 'resolved_problems'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('problems.create', compact('inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProblemRequest $request, problem $problem)
	{
		$problem->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/problems');
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
	public function edit(problem $problem)
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('problems.edit', compact('problem', 'inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(problem $problem, Request $request)
	{
		$problem->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/problems');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(problem $problem)
	{
		$problem->delete();
		return redirect('/problems/');
	}

}
