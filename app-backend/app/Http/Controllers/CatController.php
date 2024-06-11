<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    /**
     * Display a listing of the cats.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::all();
        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for choosing a specific cat.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function choose(Cat $cat)
    {
        return view('cats.choose', compact('cat'));
    }
}
