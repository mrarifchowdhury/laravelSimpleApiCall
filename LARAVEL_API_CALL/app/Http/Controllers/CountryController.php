<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http; 
use Response;
use Illuminate\Routing\Controller as BaseController;

class CountryController extends BaseController
{
    public function list()
    {   
        $data['alldata'] = Http::get('https://api.first.org/data/v1/countries')->json();
        
        return view('countryList', $data);
    }
}
