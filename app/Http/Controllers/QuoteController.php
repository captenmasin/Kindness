<?php

namespace App\Http\Controllers;

use App\Services\QuoteService;
use Illuminate\Contracts\View\View;

class QuoteController extends Controller
{
    public function single($quote): View
    {
        $key = base64_decode($quote);
        $quoteContent = (new QuoteService())->getQuote($key);

        return view('home', [
            'quote' => $quoteContent['text'],
            'key' => $quoteContent['key']
        ]);
    }
}
