<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Role\StoreRequest;
use App\Http\Requests\Api\Role\UpdateRequest;
use App\Models\Role;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $role = Role::create($data);
        return $role;
    }

    public function show(Role $role)
    {
        return $role;
    }

    public function update(UpdateRequest $request, Role $role)
    {
        $data = $request->validated();
        $role->update($data);
        return $role;
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return response([], response::HTTP_NO_CONTENT);
    }
}
