<?php namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	
	protected $fillable = ['*'];

}
