<?php

namespace App\Http\Controllers;

use App\Models\CampPackage;
use Illuminate\Http\Request;

class AdminCampPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = CampPackage::all();
        return view('admin.camp_packages.index', compact(['packages']));
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
    public function show(CampPackage $campPackage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CampPackage $campPackage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampPackage $campPackage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampPackage $campPackage)
    {
        //
    }
}
