<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(StoreAttributeRequest $request)
    {
        //
    }


    public function show(Attribute $attribute)
    {
        //
    }

    public function edit(Attribute $attribute)
    {
        //
    }


    public function update(UpdateAttributeRequest $request, Attribute $attribute)
    {
        //
    }


    public function destroy(Attribute $attribute)
    {
        //
    }
}
