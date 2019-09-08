<?php

namespace App\TextHandler;

class RemoveSymbolsTextHandler implements TextHandler
{
    /**
     * @inheritDoc
     */
    public function handle(string $text): ?string
    {
        return preg_replace("/[.,\/\!@#$%^&*()]/", "", $text);
    }
}
