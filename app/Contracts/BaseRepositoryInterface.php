<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface BaseRepositoryInterface
{
	public function all();

	public function create(Request $request);

	public function update(Request $request, $id);

	public function delete($id);

	public function find($id);
}