<?php

namespace App\Http\Controllers;

use App\Models\CompanyProductes;
use Illuminate\Http\Request;

class SortAndSearchController extends Controller
{
    public function searchProduct(Request $request)
    {
        $result = CompanyProductes::with('user')
            ->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('brand', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('price', 'LIKE', '%' . $request->search . '%')
                    ->orWhereHas('user', function ($userQuery) use ($request) {
                        $userQuery->where('name', 'LIKE', '%' . $request->search . '%');
                    });
            })
            ->get();

            return view('searchProduct',compact('result'));
    }

    public function sortProduct(Request $request)
    {
        abort_if($request['sorting'] === null, 404);
            $allProductes =CompanyProductes::query();

        switch ($request->sorting) {
            case 'oldest':
                return view('searchProduct', ['result' => $allProductes->oldest()->get()]);
                break;
            case 'cheapest':
                return view('searchProduct', ['result' => $allProductes->orderBy('price')->get()]);

                break;
            case 'A-z':
                return view('searchProduct', ['result' => $allProductes->orderBy('name')->get()]);
                break;
            case 'Z-a':
                return view('searchProduct', ['result' => $allProductes->orderBy('name','desc')->get()]);
                break;

            default:
                return back();
                break;
        }
    }
}
