<?php

namespace App\Http\Controllers;

use App\AppLayer\AppLayerConnection;

class EventsController extends Controller
{
    public function getEvents()
    {
        $response = AppLayerConnection::request('GET', 'events');
        return $response;
    }
}
