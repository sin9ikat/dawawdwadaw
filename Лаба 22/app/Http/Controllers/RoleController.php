<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(private readonly RoleService $roleService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $roles = $this->roleService->paginate();

        return view('', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->roleService->create($request->validate([
            'name' => 'required'
        ]));

        return route();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = $this->roleService->firstById($id);
        return view('', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->roleService->update($id, $request->validate([
            'name' => 'required'
        ]));

        return route();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->roleService->deleteById($id);
        return route();
    }
}
