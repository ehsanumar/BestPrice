<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('super-admin.Users')->with(['users' => User::with('roles')->role('guest')->latest()->get()]);
    }
    public function company()
    {
        return view('super-admin.companies')->with(['companies' => User::with('roles')->role('company')->latest()->get()]);
    }
    public function pharmacy()
    {
        return view('super-admin.pharmacy')->with(['pharmacy' => User::with('roles')->role('pharmacy')->latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $userRoleUpdate = User::findOrFail($id);
        $userRoleUpdate->syncRoles($request['role']);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        return back();
    }
}
