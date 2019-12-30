<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function show($id)
    {
        return Role::findOrFail($id);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $role = Role::create($request->all());

        return response()->json($role, 201);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->update($request->all());

        return response()->json($role, 200);
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id)->delete();

        return response()->json('Deleted succsessfully', 200);
    }
}