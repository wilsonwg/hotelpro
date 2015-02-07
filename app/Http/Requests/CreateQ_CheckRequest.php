<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateQ_CheckRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
//			'notes' => 'required',
			'inspector_id' => 'required',
			'room_no' => 'required',
			'hair' => 'required',
			'room_items' => 'required',
			'bed' => 'required',
			'desk' => 'required',
			'cabinet' => 'required',
			'fridges' => 'required',
			'cup' => 'required',
			'chair' => 'required',
			'bathroom_windows' => 'required',
			'case_status' => 'required'
		];
	}

	/**
	 * Get the sanitized input for the request.
	 *
	 * @return array
	 */
	public function sanitize()
	{
		return $this->all();
	}

}
