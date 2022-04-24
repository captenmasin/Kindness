<?php

namespace App\Http\Controllers;

use App\Services\QuoteService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $quote = (new QuoteService())->getRandomQuote();
        return view('home', [
            'quote' => $quote['text'],
            'key' => base64_encode($quote['key'])
        ]);
    }
}
