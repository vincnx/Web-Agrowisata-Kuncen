<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCampPackageRequest;
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
        return view('admin.camp_packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCampPackageRequest $request)
    {
        CampPackage::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'tenda' => $request->input('tenda', 0),
            'matras' => $request->input('matras', 0),
            'sleeping_bag' => $request->input('sleeping_bag', 0),
            'kayu_bakar' => $request->input('kayu_bakar', 0),
            'alat_masak' => $request->input('alat_masak', 0)
        ]);

        return to_route('admin.paket-camping.index');
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
    public function edit(CampPackage $paket_camping)
    {
        return view('admin.camp_packages.edit', compact('paket_camping'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CampPackage $paket_camping)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);
        $validated['tenda'] = $request->input('tenda', 0);
        $validated['matras'] = $request->input('matras', 0);
        $validated['sleeping_bag'] = $request->input('sleeping_bag', 0);
        $validated['kayu_bakar'] = $request->input('kayu_bakar', 0);
        $validated['alat_masak'] = $request->input('alat_masak', 0);
        $paket_camping->update($validated);

        return to_route('admin.paket-camping.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CampPackage $campPackage)
    {
        //
    }
}
