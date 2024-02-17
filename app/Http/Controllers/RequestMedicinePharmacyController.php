<?php

namespace App\Http\Controllers;

use App\Models\RequestMedicinePharmacy;
use Illuminate\Http\Request;

class RequestMedicinePharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

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
        $comment= $request->validate([
            'message' => ['string','min:3'],
            'product_id' => ['numeric','required'],
        ]);
        $comment=RequestMedicinePharmacy::create([
            'message' => $comment['message'],
            'pharmacy_id' => auth()->id(),
            'product_id' =>$comment['product_id'],
        ]);
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(RequestMedicinePharmacy $requestMedicinePharmacy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestMedicinePharmacy $requestMedicinePharmacy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RequestMedicinePharmacy $requestMedicinePharmacy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        RequestMedicinePharmacy::findOrFail($id)->delete();
        return back();
    }
}
