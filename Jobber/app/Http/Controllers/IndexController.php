<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        //Get data from DB in here and pass it to the view

        return view('index.index', [
            'title' => 'Welcome to Jobber!',
            'text' => '<div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2 class="text-center display-4">Here you will find everything you need for your next dream job based
                        on YOUR criteria!</h2>
                </div>
                <div class="col-sm">
                    <figure class="figure">
                        <img src="https://pixy.org/src2/570/5707217.jpg" width="450px" height="350px"
                            class="figure-img img-fluid rounded mx-auto text-center">
                    </figure>
                </div>
            </div>
        </div>
        <div class="lead text-center"><strong><u>Head over to the Job Offers tab for more info!</u></strong></div>'
        ]);
    }
}
