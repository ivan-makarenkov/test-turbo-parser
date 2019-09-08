<?php

namespace App\TextHandler;

class ReplaceSpacesToEolTextHandler implements TextHandler
{
    /**
     * @inheritDoc
     */
    public function handle(string $text): ?string
    {
        return str_replace(' ', "\n", $text);
    }
}
