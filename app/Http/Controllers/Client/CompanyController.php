<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function index($slug){

        $company = Company::where('slug', $slug)->first();
        
        return response()->json($company->products);
    }
}
