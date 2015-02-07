<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
//Use App\Note;
//Use App\Work;
use App\d_check;
use App\q_check;
use App\we_check;
use App\problem;

use App\complain;
use App\ToDo;
use App\freezer;
use App\rental;


class PagesController extends Controller {

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

		$unsolved_todos = DB::table('todos')->leftjoin('inspector', 'todos.reporter', '=', 'inspector.id')->select('todos.*', 'inspector.name')->where('case_status', '=', 1)->get();
		$room_notes = DB::table('notes')->leftjoin('works', 'notes.work_id', '=', 'works.id')->select('notes.*', 'works.work')->where('case_status', '=', 1)->get();
		$d_checks = d_check::wherecase_status(1)->get() ;
		//$d_checks_count = d_check::wherecase_status(1)->count();
		//$d_checks_count = count($d_checks);
		$q_checks = q_check::wherecase_status(1)->get() ;
		$we_checks = we_check::wherecase_status(1)->get() ;

		//$room_notes = $note->where('case_status', '=', 1)->get();
		//$room_notes = ['suck_1','suck_2','suck_3'];
		//dd($room_notes);
		//$notes = Note::where('case_status', '=', 1)->get();
		return View('pages.dashboard', compact('unsolved_todos','room_notes', 'd_checks', 'd_checks_count', 'q_checks', 'we_checks'));

		//return View::make('pages.dashboard');
	}


	public function hotel_rooms()
	{

		return View('pages.hotel_rooms');
	}


	public function room_reports($room_no)
	{

		/*Query for the room_check_d tables*/
		$d_clean_records = DB::table('d_checks')->where('room_no', '=', $room_no)->get();
		$q_clean_records = DB::table('q_checks')->where('room_no', '=', $room_no)->get();
		$we_checks = we_check::whereroom_no($room_no)->get();
		$room_notes = DB::table('notes')->leftjoin('works', 'notes.work_id', '=', 'works.id')->select('notes.*', 'works.work')->where('room_no', '=', $room_no)->get();

		//$room_notes = ['suck_1','suck_2','suck_3'];
		//dd($room_notes);
		//echo $room_no."<P>";
		//foreach($d_clean_records as $d_clean_record){
		//	echo $d_clean_record->id;
		//}
		//die;
		//dd($d_clean_records);

		return View('pages.room_reports',compact('room_no','d_clean_records','q_clean_records', 'we_checks', 'room_notes'));
	}


	public function work_logs()
	{
		$work_logs = DB::table('notes')->where('case_status', '=', 0)->get();
		return View('pages.work_logs', compact('work_logs'));

	}



}
