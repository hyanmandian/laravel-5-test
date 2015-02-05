<?php namespace App\Http\Controllers;

use App\Models\Repositories\UserRepository;

class DashboardController extends Controller {

	public function index(UserRepository $user){

		return view('dashboard.index');

	}

}
