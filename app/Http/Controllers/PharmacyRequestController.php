<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pharmacyRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PharmacyRequestRequest;
use App\Models\CompanyPrice;
use App\Models\RequestMedicinePharmacy;

class PharmacyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productes = pharmacyRequest::with('user')->latest()->get();
        return view('super-admin.pharmacyRequests', compact('productes'));
    }

    public function requestes()
    {
        $requestes = pharmacyRequest::with('user')->latest()->get();
        return view('requestes', compact('requestes'));
    }

    public function RequestDetails($id)
    {
        $requestes = pharmacyRequest::with('user')->findOrFail($id);
        $comments = CompanyPrice::with('user')->where('pharmacy_requests_id', $id)->latest()->get();
        return view('requestDetails', compact(['requestes', 'comments']));
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
    public function store(PharmacyRequestRequest $request)
    {
        $validatedData = $request->validated();
        $imageName = time() . '.' . $validatedData['image']->extension();
        $validatedData['image']->StoreAs('public/imagepharmacy', $imageName);
        $validatedData['image'] = $imageName;
        pharmacyRequest::create([
            'name' => $validatedData['name'],
            'brand' => $validatedData['brand'],
            'image' => $imageName,
            'pharmacy_id' => auth()->id(),
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(pharmacyRequest $pharmacyRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pharmacyRequest $pharmacyRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PharmacyRequestRequest $request, $id)
    {
        $editMedicine = pharmacyRequest::findOrFail($id);
        $Medicine = $request->validated();

        if ($request->hasFile('image')) {
            // Get the uploaded file
            $uploadedImage = $request->file('image');

            // Generate a unique filename for the image
            $imageName = time() . '.' . $uploadedImage->extension();

            // Store the image in the public/imagepharmacy directory
            $uploadedImage->storeAs('public/imagepharmacy', $imageName);

            // Delete the previous image if it exists
            if ($editMedicine->image) {
                Storage::delete('public/imagepharmacy/' . $editMedicine->image);
            }

            // Update the 'image' field in the $Medicine array
            $Medicine['image'] = $imageName;
        }

        // Update the pharmacy request with the validated data
        $editMedicine->update([
            'name' => $Medicine['name'],
            'brand' => $Medicine['brand'],
            'image' => $Medicine['image'] ?? $editMedicine->image, // Use existing image if no new image was uploaded
            'pharmacy_id' => auth()->id(),
        ]);

        return back();


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        pharmacyRequest::findOrFail($id)->delete();
        return back();
    }
}
