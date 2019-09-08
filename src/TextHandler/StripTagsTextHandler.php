<?php

namespace App\TextHandler;

class StripTagsTextHandler implements TextHandler
{
    /**
     * @inheritDoc
     */
    public function handle(string $text): ?string
    {
        return strip_tags($text);
    }
}
