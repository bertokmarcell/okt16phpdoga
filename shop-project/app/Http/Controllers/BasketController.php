<?php

namespace App\Http\Controllers;

use App\Models\basket;
use App\Http\Requests\StorebasketRequest;
use App\Http\Requests\UpdatebasketRequest;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        basket::with('basket')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        basket::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorebasketRequest $request)
    {
        $validated =$request;
        Basket::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(basket $basket)
    {
        return $basket->load('basket');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebasketRequest $request, basket $basket)
    {
        $validated =$request->validate('time');
        $basket->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(basket $basket)
    {
        $basket->delete();
    }
}
