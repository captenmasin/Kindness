<?php

namespace App\Http\Controllers;

use App\Services\QuoteService;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class QuoteController extends Controller
{
    public function generate(){
        $quotes = json_decode(file_get_contents(resource_path('json/compliments.json')));
        echo $quotes[array_rand($quotes)];
    }

    public function single($quote){
        $key = base64_decode($quote);
        $quote = (new QuoteService())->getQuote($key);
        
        return view('home', [
            'quote' => $quote['text'],
            'key' => base64_encode($quote['key'])
        ]);
    }
}
