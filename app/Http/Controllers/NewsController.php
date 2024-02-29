<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = 'https://mashable.com/';
        $crawler = $client->request('GET', $url);

        $links = $crawler->filter('.w-full a')->extract(['href']);

        return view('index', compact('links'));
    }
}
