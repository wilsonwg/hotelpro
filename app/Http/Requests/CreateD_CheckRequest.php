<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateD_CheckRequest extends Request {

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
			'room_door' => 'required',
			'room_no_card' => 'required',
			'hair' => 'required',
			'room_items' => 'required',
			'bed' => 'required',
			'bed_underside' => 'required',
			'bedside_cabinet' => 'required',
			'trash_bin' => 'required',
			'desk' => 'required',
			'cabinet' => 'required',
			'fridge' => 'required',
			'cup' => 'required',
			'kettle' => 'required',
			'chair' => 'required',
			'room_windows' => 'required',
			'wallpaper' => 'required',
			'floor_spots' => 'required',
			'bathroom_windows' => 'required',
			'bathroom_table' => 'required',
			'bathroom_wall' => 'required',
			'bathroom_silicone' => 'required',
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
