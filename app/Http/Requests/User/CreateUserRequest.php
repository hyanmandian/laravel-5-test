<?php namespace App\Http\Requests\User;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

	public function rules() {

		return [
			'name' => 'required',
			'email' => 'required|email',
		];

	}

	public function authorize() {

		return true;

	}

}