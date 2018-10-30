<?php
/**
 * Created by PhpStorm.
 * User: mahmoud
 * Date: 10/28/18
 * Time: 6:29 PM
 */

namespace App\Http\Controllers\PostsService;

use App\Http\Controllers\Controller;
use App\ServicesLayer\DataAccessLayer;

class PostsCRUDController extends Controller
{
    public function getPosts()
    {
        $response = DataAccessLayer::request(POSTS_KEY_CONNECTION, POSTS_TOKEN, 'GET', 'test');
        return $response;
    }

}
