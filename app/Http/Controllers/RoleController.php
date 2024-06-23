<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Response;

class RoleController extends Controller
{
    public function store()
    {
        $role = $this->getData();
        $data = Role::create($role);
        dd($data);
    }

    public function index()
    {
        return Role::all();
    }

    public function show(Role $role)
    {
        return $role;
    }

    public function update(Role $role)
    {
        $role->update(
            [
                'title' => 'User'
            ]
        );

        return $role;
    }

    public function destroy()
    {
        $role = Role::find(1);

        $role->delete();

        return Response::HTTP_NO_CONTENT;
    }

    protected function getData()
    {
        return [
            'title' => 'Admin'
        ];
    }
}
