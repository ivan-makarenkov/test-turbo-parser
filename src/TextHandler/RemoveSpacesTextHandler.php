<?php

namespace App\TextHandler;

class RemoveSpacesTextHandler implements TextHandler
{
    /**
     * @inheritDoc
     */
    public function handle(string $text): ?string
    {
        return str_replace(' ', '', $text);
    }
}
