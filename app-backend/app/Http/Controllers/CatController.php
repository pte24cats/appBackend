<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cat = Cat::create($request->all());
        return response()->json(['message' => 'Cat created!', 'cat' => $cat]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        return response()->json($cat);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        return response()->json($cat);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        $cat->update($request->all());
        return response()->json(['message' => 'Cat updated!', 'cat' => $cat]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        $cat->delete();
        return response()->json(['message' => 'Cat deleted :(']);
    }
}
