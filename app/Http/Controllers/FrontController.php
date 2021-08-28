<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FrontController extends Controller
{
    public $rss;
    public $urlFeed = "https://rafacunha.com.br/blog/feed/";

    public function index()
    {
        $this->feed = Cache::remember('feed', 4320, function() {

        
            $rss = new \DOMDocument();
            $rss->load($this->urlFeed);

            $feed = array();
            $i = 0;
            foreach($rss->getElementsByTagName('item') as $node) {
                $item = array(
                    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                    'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                );
                array_push($feed, $item);
            }
            return $feed;
        });

        return view('welcome')->with(['feed' => $this->feed]);
    }
}
