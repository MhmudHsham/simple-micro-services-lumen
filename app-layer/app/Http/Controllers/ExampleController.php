<?php

namespace App\Http\Controllers;

use App\ServicesLayer\DataAccessLayer;

class ExampleController extends Controller
{


    public function index()
    {
        $response = DataAccessLayer::connect('GET', 'http://localhost/simple-micro-services-lumen/services-layer/events-service/test');
        return $response;
    }

}
