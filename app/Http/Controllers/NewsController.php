<?php
namespace App\Http\Controllers;

use App\Like;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class NewsController extends Controller
{
    function index()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'http://localhost:8001/');
/*
        echo $response->getStatusCode(); # 200
        echo $response->getHeaderLine('content-type'); # 'application/json; charset=utf8'
*/
        echo $response->getBody(); # '{"id": 1420053, "name": "guzzle", ...}'

        # Send an asynchronous request.
        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
        $promise = $client->sendAsync($request)->then(function ($response) {
            
        });

        $promise->wait();

    }
}