<?php

namespace App\Http\Controllers;

use App\AppLayer\AppLayerConnection;

class PostsController extends Controller
{
    public function getPosts()
    {
        $response = AppLayerConnection::request('GET', 'posts');
        return $response;
    }
}
