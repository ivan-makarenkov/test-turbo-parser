<?php

namespace App\TextHandler;

class ToNumberTextHandler implements TextHandler
{
    /**
     * @inheritDoc
     */
    public function handle(string $text): ?string
    {
        preg_match('/\d+/', $text, $output);
        if(isset($output[0])) {
            return $output[0];
        }
        return '';
    }
}
