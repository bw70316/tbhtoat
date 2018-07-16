<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoundController extends Controller
{
    //

    public function display($rounddatas) {

        return view('rounds/display', compact('rounddatas'));
    }

    public static function scrape($collection)
{
    $crawler = Goutte::request('GET', env('FUNKO_POP_URL').'/'.$collection);

    $pages = ($crawler->filter('footer .pagination li')->count() > 0)
        ? $crawler->filter('footer .pagination li:nth-last-child(2)')->text()
        : 0
    ;

    for ($i = 0; $i < $pages + 1; $i++) {
        if ($i != 0) {
            $crawler = Goutte::request('GET', env('FUNKO_POP_URL').'/'.$collection.'?page='.$i);
        }

        $crawler->filter('.product-item')->each(function ($node) {
            $sku   = explode('#', $node->filter('.product-sku')->text())[1];
            $title = trim($node->filter('.title a')->text());

            print_r($sku.', '.$title);
        });
    }

    return true;
}
}
