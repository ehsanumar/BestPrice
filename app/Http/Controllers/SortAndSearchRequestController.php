<?php

namespace App\Http\Controllers;

use App\Models\pharmacyRequest;
use Illuminate\Http\Request;

class SortAndSearchRequestController extends Controller
{
    public function searchRequest(Request $request)
    {
        $result = pharmacyRequest::with('user')
            ->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('brand', 'LIKE', '%' . $request->search . '%')
                    ->orWhereHas('user', function ($userQuery) use ($request) {
                        $userQuery->where('name', 'LIKE', '%' . $request->search . '%');
                    });
            })
            ->get();

        return view('searchRequest', compact('result'));
    }

    public function sortRequest(Request $request)
    {
        abort_if($request['sorting'] === null, 404);
        $allProductes = pharmacyRequest::query();

        switch ($request->sorting) {
            case 'oldest':
                return view('searchRequest', ['result' => $allProductes->oldest()->get()]);
                break;
            case 'A-z':
                return view('searchRequest', ['result' => $allProductes->orderBy('name')->get()]);
                break;
            case 'Z-a':
                return view('searchRequest', ['result' => $allProductes->orderBy('name', 'desc')->get()]);
                break;

            default:
                return back();
                break;
        }
    }

}
