<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateWE_CheckRequest extends Request {

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
			'room_no' => 'required',
			'inspector_id' => 'required',
			'light' => 'required',
			'lcd' => 'required',
			'tv' => 'required',
			'freezers' => 'required',
			'faucet' => 'required',
			'basin' => 'required',
			'shower' => 'required',
			'toilet' => 'required',
			'notes' => 'required',
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
