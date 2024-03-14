<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Feature;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Role::class);

        $roles = Role::all();
        $features = Feature::all();
        return view('roles.index', ['roles' => $roles, 'features' => $features]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Role::class);

        $features = Feature::all();
        return view('roles.create', ['features' => $features]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $this->authorize('create', Role::class);

        $validated = $request->validated();

        $role = Role::create($validated);
        $permissions = Permission::whereIn('id', $validated['permissions'])->get();
        $role->permissions()->attach($permissions);

        return redirect()->route('roles.index');
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
    public function edit(Role $role)
    {
        $this->authorize('update', Role::class);

        $features = Feature::with('permissions')->get();
        return view('roles.edit', ['role' => $role, 'features' => $features]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        $this->authorize('update', Role::class);

        $validated = $request->validated();

        $role->name = $validated['name'];
        $permissions = Permission::whereIn('id', $validated['permissions'])->get();
        $role->permissions()->sync($permissions);
        $role->update($validated);

        return redirect()->route('roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $this->authorize('delete', Role::class);

        if ($role->users()->count() > 0) {
            return redirect()->back();
        }

        $role->permissions()->detach();
        $role->delete();

        return redirect()->route('roles.index');
    }
}
