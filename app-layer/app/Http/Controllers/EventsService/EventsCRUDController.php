<?php
/**
 * Created by PhpStorm.
 * User: mahmoud
 * Date: 10/28/18
 * Time: 6:29 PM
 */

namespace App\Http\Controllers\EventsService;

use App\Http\Controllers\Controller;
use App\ServicesLayer\DataAccessLayer;

class EventsCRUDController extends Controller
{


    public function getEvents()
    {
        $response = DataAccessLayer::request(EVENTS_KEY_CONNECTION, EVENTS_TOKEN, 'GET', 'test');
        return $response;
    }

}
