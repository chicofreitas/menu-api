<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function index($slug){
        return response()->json([
            'name' => 'My Default Company',
            'products' => [
                [
                    'id' => '4',
                    'companyId' => '1',
                    'name' => 'Burger Simple',
                    'description' => 'the most simple burger.',
                    'price' => '12.00',
                ],
                [
                    'id' => '6',
                    'companyId' => '1',
                    'name' => 'Burger Double',
                    'description' => 'the biggest burger in the city.',
                    'price' => '16.00',
                ],
                [
                    'id' => '10',
                    'companyId' => '1',
                    'name' => 'Burger Cheese',
                    'description' => 'a delicious burger with chesse inside.',
                    'price' => '20.00',
                ]
            ]
        ]);
    }
}
