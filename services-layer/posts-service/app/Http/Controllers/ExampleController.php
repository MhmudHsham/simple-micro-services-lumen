<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function index()
    {
        return response()->json("Posts Service", 200);
    }
}
