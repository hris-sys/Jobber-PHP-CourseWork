<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    public function index()
    {
        //Get data from DB in here and pass it to the view
        /* $results = DB::select(DB::raw("SELECT j.title, comp.name FROM jobs as j
        INNER JOIN companies as comp
        ON j.company_id = comp.id")); */

        return view('job.jobIndex', [
            'title' => 'Here you will find your next job!'
        ]);
    }

    public function searchById(Request $request)
    {
        $id = $request->get('search');

        $results = DB::select(DB::raw("SELECT jobs.title, cities.name AS 'cityName', jobs.id AS 'jobId', companies.name AS 'companyName', jobs.content, jobs.image FROM jobs
        INNER JOIN cities ON
        jobs.city_id = cities.id
        Inner Join companies on
        jobs.company_id = companies.id
        WHERE jobs.id = $id"), array(
            'id' => $id,
        ));

        return view(
            'job.jobIndexSearchById',
            [
                'results' => $results,
            ]
        );
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $results = DB::select(DB::raw("SELECT jobs.title, cities.name AS 'cityName', jobs.id AS 'jobId', companies.name AS 'companyName', jobs.updated_at AS 'jobUpdate', jobs.content, jobs.image FROM jobs
        INNER JOIN cities ON
        jobs.city_id = cities.id
        Inner Join companies on
        jobs.company_id = companies.id
        WHERE jobs.title LIKE '$search'
        OR cities.name LIKE '$search'
        OR companies.name LIKE '$search'"), array(
            'search' => $search,
        ));

        return view(
            'job.jobIndexSearchResults',
            [
                'results' => $results,
            ]
        );
    }
}
