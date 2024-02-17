<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyProductsRequest;
use App\Models\CompanyProductes;
use App\Models\RequestMedicinePharmacy;
use Illuminate\Http\Request;

class CompanyProductesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productes= CompanyProductes::with('user')->latest()->get();
        return view('super-admin.companyProductes',compact('productes'));
    }
    public function Productes()
    {
        $productes= CompanyProductes::with('user')->latest()->get();
        return view('productes',compact('productes'));
    }
    public function ProductesDetails($id)
    {
        $productes = CompanyProductes::with('user')->findOrFail($id);
        $comments = RequestMedicinePharmacy::with('user')->where('product_id',$id)->latest()->get();
        return view('productDetails',compact(['productes','comments']));
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
    public function store(CompanyProductsRequest $request)
    {
        $validatedData = $request->validated();
        $imageName = time() . '.' . $validatedData['image']->extension();
        $validatedData['image']->StoreAs('public/image', $imageName);
        $validatedData['image'] = $imageName;

        // Create the CompanyProductes instance with the validated data
        CompanyProductes::create([
            'name' => $validatedData['name'],
            'brand' => $validatedData['brand'],
            'details' => $validatedData['details'],
            'price' => $validatedData['price'],
            'image' => $imageName, // Use null if no image is uploaded
            'company_id' => auth()->id(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyProductsRequest $companyProductes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyProductsRequest $companyProductes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyProductsRequest $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        CompanyProductes::findOrFail($id)->delete();
        return back();
    }
}
