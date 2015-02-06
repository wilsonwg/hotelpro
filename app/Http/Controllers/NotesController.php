<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\RoomNotes;
use App\Note;
use App\Inspector;
use App\Work;
use App\Http\Requests\CreateNoteRequest;

class NotesController extends Controller {

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
	public function create($rooms, Inspector $inspector)
	{
		//return "create a new record";
		$inspectors = Inspector::lists('name', 'id');
		$works = Work::lists('work', 'id');
		return view('notes.create', compact('rooms', 'inspectors', 'works'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateNoteRequest $request, Note $note)
	{
		//dd($request->all());
		$note->create($request->all());
		//return redirect('/room_reports/'.$request->room_no);
		return redirect('/dashboard');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//dd($room_note_record);
		$room_notes = RoomNotes::find($id);

		return view('notes.show',compact('room_notes'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function edit($id)
	public	function edit(Note $note)
	{

		//dd($room_note_record);
		//$room_notes = RoomNotes::find($id);
		//dd($note->notes);
	   $inspectors = Inspector::lists('name', 'id');
		//return view('notes.edit',compact('room_notes', 'inspectors'));
		$works = Work::lists('work', 'id');
		return view('notes.edit', compact('note','inspectors', 'works'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
//	public function update($id, Request $request)
//	{
		//dd(\Request::input());
//		$room_notes = RoomNotes::find($id);

//		$room_notes->fill(['notes'=> $request->get('notes'), 'case_status'=> $request->get('case_status'), 'inspector_id'=> $request->get('inspector_id') ])->save();
//		return redirect('/room_reports/'.$room_notes->room_no);
//	}

	public function update(Note $note, Request $request)
	{

		$note->fill(['work_id'=>$request->get('work_id') ,'notes'=> $request->get('notes'), 'case_status'=> $request->get('case_status'), 'inspector_id'=> $request->get('inspector_id'), 'worker_id'=>$request->get('worker_id'),'closer_id'=>$request->get('closer_id') ])->save();
		//return redirect('/room_reports/'.$note->room_no);
		return redirect('/dashboard');

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Note $note)
	{
		$note->delete();
		return redirect('/room_reports/'.$note->room_no);
	}

}

?>