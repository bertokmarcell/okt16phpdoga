<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        product::with('product')->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        product::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreproductRequest $request)
    {
        $validated =$request;
        product::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return $product->load('basket');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproductRequest $request, product $product)
    {
        $validated =$request->validate('time');
        $product->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
    }
}
