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
        // $user = auth()->user();

        // $senarais = $user->senarais;

        // return inertia('Senarai/Index', [
        //     'senarais' => $senarais
        // ]);


        //ini adalah shortcode
        return inertia('Senarai/Index', [
            'senarais' => auth()->user()->senarais
        ]);
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
