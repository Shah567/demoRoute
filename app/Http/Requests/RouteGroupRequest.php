<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RouteGroupRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'route_group_name' => ['required', 'max:40', 'min:3'],
		];
	}
}
