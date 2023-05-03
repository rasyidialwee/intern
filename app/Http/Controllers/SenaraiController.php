<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSenaraiRequest;
use App\Http\Requests\UpdateSenaraiRequest;
use App\Models\Senarai;

class SenaraiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Senarai/Index');
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
    public function store(StoreSenaraiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Senarai $senarai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Senarai $senarai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSenaraiRequest $request, Senarai $senarai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Senarai $senarai)
    {
        //
    }
}
