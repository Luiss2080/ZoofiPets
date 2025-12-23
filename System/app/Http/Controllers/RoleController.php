<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $roles = Role::query()
            ->when($search, function ($query, $search) {
                $query->where('nombre', 'like', "%{$search}%")
                      ->orWhere('descripcion', 'like', "%{$search}%");
            })
            ->withCount('users')
            ->orderBy('nombre', 'asc')
            ->paginate($perPage);

        return view('admin.roles.index', compact('roles'));
    }
}
