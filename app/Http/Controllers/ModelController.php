<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

trait ModelController
{
    const modelClass = Group::class;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this::modelClass::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FormRequest $request)
    {
        $this::modelClass::insert($request->only('name'));
    }

    /**
     * Display the specified resource.
     * @param Group $model
     */
    public function show(Model $model)
    {
        return $model;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FormRequest $request, Model $model)
    {
        $model->update($request->only('name'));
        $model->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Model $model)
    {
        $model->delete();
    }
}
