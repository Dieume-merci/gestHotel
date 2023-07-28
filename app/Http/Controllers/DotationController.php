<?php

namespace App\Http\Controllers;

use App\Models\Dotation;
use Illuminate\Http\Request;

class DotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("components.index-dotation");
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
    public function show(Dotation $dotation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dotation $dotation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dotation $dotation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dotation $dotation)
    {
        //
    }
}
