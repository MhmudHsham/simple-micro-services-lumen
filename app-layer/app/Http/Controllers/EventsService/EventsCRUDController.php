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

    public function index()
    {
        $end_point = config("endpoints.EVENTS_KEY_CONNECTION");
        $response = DataAccessLayer::connect('GET', $end_point . 'test');
        return $response;
    }

}
