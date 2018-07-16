<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapeController extends Controller
{
    //
    public function scrape () {
        
        $client = new Client();
        $crawler = $client->request('GET', 'http://www.espn.com/nhl/scoreboard');
        $crawler->filter('.game-header' )->each(function ($node) {
            print $node->text()."\n";
        });
    }
}
