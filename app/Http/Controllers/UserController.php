<?php namespace App\Http\Controllers;

use App\Models\Repositories\UserRepository;
use App\Http\Requests\User\CreateUserRequest;

class UserController extends Controller {

	private $user;

	public function __construct(UserRepository $user) {
		$this->user = $user;
	}

	public function index(){

        $user = $this->user->find(1);

		return view('dashboard.user.index')
             ->with('user', $user);

	}

    public function create() {

        return view('dashboard.user.create');

    }

    public function store(CreateUserRequest $request) {

        $this->user->create($request->all());

    }

    public function show($id) {

        $user = $this->user->find($id);

        return view('dashboard.user.show')
             ->with('user', $user);

    }

    public function edit($id) {

        $user = $this->user->find($id);

        return view('dashboard.user.edit')
             ->with('user', $user);

    }

    public function update(Request $request, $id) {

        $user = $this->user->find(1);

    }

    public function destroy($id) {

        $this->user->destroy($id);

    }

}
