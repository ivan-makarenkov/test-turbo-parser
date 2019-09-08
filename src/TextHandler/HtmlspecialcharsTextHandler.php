<?php

namespace App\TextHandler;

class HtmlspecialcharsTextHandler implements TextHandler
{
    /**
     * @inheritDoc
     */
    public function handle(string $text): ?string
    {
        return htmlentities($text);
    }
}
