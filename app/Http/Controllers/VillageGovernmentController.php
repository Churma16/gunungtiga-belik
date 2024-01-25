<?php

namespace App\Http\Controllers;

use App\Models\VillageGovernment;
use App\Http\Requests\StoreVillageGovernmentRequest;
use App\Http\Requests\UpdateVillageGovernmentRequest;

class VillageGovernmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villageGovernments = VillageGovernment::orderBy('order')->get();

        return view('admin.village-governments.index', [
            'villageGovernments' => $villageGovernments
        ]);
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
    public function store(StoreVillageGovernmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VillageGovernment $villageGovernment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VillageGovernment $villageGovernment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVillageGovernmentRequest $request, VillageGovernment $villageGovernment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VillageGovernment $villageGovernment)
    {
        //
    }

    public function updateOrder(){

        $villageGovernments = VillageGovernment::all();
        foreach ($villageGovernments as $villageGovernment) {
            foreach (request()->order as $order) {
                if ($order['id'] == $villageGovernment->id) {
                    $villageGovernment->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json(['success' => true]);
    }
}
