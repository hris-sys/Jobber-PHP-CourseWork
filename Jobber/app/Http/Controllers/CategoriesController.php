<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        //Get data from DB in here and pass it to the view
        /* $results = DB::select(DB::raw("SELECT j.title, comp.name FROM jobs as j
        INNER JOIN companies as comp
        ON j.company_id = comp.id")); */

        return view('categories.categories', [
            'title' => 'Here you will find your next job!'
        ]);
    }
}
