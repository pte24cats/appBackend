<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use App\Models\Sponsor;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adoptions = Adoption::all();
        return response()->json($adoptions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $adoption = Adoption::create($request->all());
        return response()->json($adoption);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $adoption = Adoption::findOrFail($id);
        return response()->json($adoption);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->update($request->all());
        return response()->json($adoption);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $adoption = Adoption::find($id);

        if ($adoption) {
            $adoption->delete();
            return response()->json(['message' => 'Adoption deleted successfully']);
        } else {
            return response()->json(['message' => 'Adoption not found']);
        }
    }
}
