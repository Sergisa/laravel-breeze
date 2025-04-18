<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
    }

    public function index()
    {
        return Group::all();
    }

    public function store(StoreGroupRequest|FormRequest $request)
    {
        Group::insert($request->only('name'));
    }

    public function show(Group $group)
    {
        if (Auth::user()->cannot('viewAny', Group::class)) {
            abort(403, "Вам нельзя");
        }
        return $group;
    }

    public function update(UpdateGroupRequest|FormRequest $request, Group|Model $group)
    {
        $group->update($request->only('name'));
        $group->save();
    }

    public function destroy(Group $group)
    {
        $group->delete();
    }
}
