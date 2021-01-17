<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        $resultsCities = DB::select(DB::raw("Select city.name from jobs as j
        inner join cities as city
        on j.city_id = city.id"));

        $resultsCompanies = DB::select(DB::raw("Select company.name from jobs
        inner join companies as company
        on jobs.company_id = company.id"));


        return view('categories.categories', [
            'title' => 'Check out all the jobs based on cities and companies!',
            'resultsCities' => $resultsCities,
            'resultsCompanies' => $resultsCompanies
        ]);
    }
}
