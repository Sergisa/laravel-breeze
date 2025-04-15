<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    use ModelController{
        index as protected ModelControllerIndex;
        show as protected ModelControllerShow;
        store as protected ModelControllerStore;
        update as protected ModelControllerUpdate;
        destroy as protected ModelControllerDestroy;
    }
    const modelClass = Group::class;

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
        return $this->ModelControllerIndex();
    }
    public function store(StoreGroupRequest $request)
    {
        $this->ModelControllerStore($request);
    }

    public function show(Group $group)
    {
        if(Auth::user()->cannot('viewAny',Group::class)){
            abort(403, "Вам нельзя");
        }
        return $this->ModelControllerShow($group);
    }

    public function update(UpdateGroupRequest $request, Group $group)
    {
        $this->ModelControllerUpdate($request,$group);
    }

    public function destroy(Group $group)
    {
        $this->ModelControllerDestroy($group);
    }
}
