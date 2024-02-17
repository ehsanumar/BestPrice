<?php

namespace App\Http\Controllers;

use App\Models\CompanyPrice;
use Illuminate\Http\Request;

class CompanyPriceController extends Controller
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
        $comment = $request->validate([
            'message' => ['string', 'min:3'],
            'pharmacy_requests_id' => ['numeric', 'required'],
        ]);
        $comment = CompanyPrice::create([
            'message' => $comment['message'],
            'company_id' => auth()->id(),
            'pharmacy_requests_id' => $comment['pharmacy_requests_id'],
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyPrice $companyPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyPrice $companyPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyPrice $companyPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyPrice $companyPrice)
    {
        //
    }
}
