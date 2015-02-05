<?php namespace App\Models\Repositories;

use App\Models\Entities\User;

class UserRepository extends Repository {

	public function __construct(User $user) {

		$this->entity = $user;

	}

}
