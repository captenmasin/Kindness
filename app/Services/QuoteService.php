<?php

namespace App\Services;

use JetBrains\PhpStorm\ArrayShape;

class QuoteService
{
    public array $quotes = [];

    public function __construct()
    {
        $this->quotes = json_decode(file_get_contents(resource_path('json/compliments.json')));
    }

    public function getQuote($id)
    {
        $id = (int) $id;

        return [
            'text' => $this->quotes[$id],
            'key'  => base64_encode($id)
        ];
    }

    #[ArrayShape(['text' => "mixed", 'key' => "array|int|string"])] public function getRandomQuote(): array
    {
        return $this->getQuote(array_rand($this->quotes));
    }
}
