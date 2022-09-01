<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class HomeCompanyController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __invoke($slug)
    {
        $company = Company::where(['slug' => $slug])->get(
                [
                    'name', 
                    'phone', 
                    'address', 
                    'is_open', 
                    'opens_at', 
                    'closes_at'
                ]
            );

        return response()->json($company);
    }
}
