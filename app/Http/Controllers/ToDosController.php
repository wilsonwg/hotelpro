<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Inspector;
use App\ToDo;
use App\Http\Requests\CreateToDoRequest;

use App\problem;
use App\complain;
use App\freezer;
use App\rental;

class ToDosController extends Controller {


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
	public function index(todo $todo)
	{
		$unsolved_todos = DB::table('todos')->leftjoin('inspector', 'todos.reporter', '=', 'inspector.id')->select('todos.*', 'inspector.name')->where('case_status', '=', 1)->get();
		//$unsolved_todos = $todo->wherecase_status(1)->get();
		//$resolved_todos = $todo->wherecase_status(0)->get();
		$resolved_todos = DB::table('todos')->leftjoin('inspector', 'todos.reporter', '=', 'inspector.id')->select('todos.*', 'inspector.name')->where('case_status', '=', 0)->get();
		return view('todos.index', compact('unsolved_todos', 'resolved_todos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('todos.create', compact('inspectors'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateToDoRequest $request, ToDo $todo)
	{
		$todo->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/todos');
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
	public function edit(ToDo $todo)
	{
		$inspectors = Inspector::lists('name', 'id');
		return view('todos.edit', compact('todo', 'inspectors'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(ToDo $todo, Request $request)
	{
		$todo->fill($request->input())->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/todos');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(ToDo $todo)
	{
		$todo->delete();
		return redirect('/todos/');
	}

}
