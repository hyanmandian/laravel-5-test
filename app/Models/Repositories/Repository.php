<?php namespace App\Models\Repositories;

abstract class Repository {

	protected $entity;

	public function all($columns = array('*')) {
		
		return $this->entity->all($columns);

	}

	public function find($id, $columns = array('*')) {

		return $this->entity->find($id, $columns);

	}

	public function create(array $attributes) {
		
		return $this->entity->create($attributes);

	}

	public function count() {

		return $this->entity->count();

	}

	public function destroy($ids) {

		return $this->entity->destroy($ids);

	}

}