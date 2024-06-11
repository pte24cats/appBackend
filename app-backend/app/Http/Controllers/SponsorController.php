<?php

namespace App\Http\Controllers;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors = Sponsor::all();
        return response()->json($sponsors);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sponsor = Sponsor::create($request->all());
        return response()->json($sponsor);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        return response()->json($sponsor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->update($request->all());
        return response()->json($sponsor);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsor = Sponsor::find($id);

        if ($sponsor) {
            $sponsor->delete();
            return response()->json(['message' => 'Sponsor deleted successfully']);
        } else {
            return response()->json(['message' => 'Sponsor not found']);
        }
    }
}
