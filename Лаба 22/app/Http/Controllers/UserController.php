<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private readonly UserService $userService)
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = $this->userService->paginate();

        return view('admin_panel.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_panel.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->userService->create($request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]));

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->userService->firstById($id);
        return view('admin_panel.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin_panel.users.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->userService->update($id, $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]));

        return route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->userService->deleteById($id);
        return route('users.index');
    }
}
