<?php

namespace App\TextHandler;

interface TextHandler
{
    /**
     * @param string $text
     *
     * @return string
     */
    public function handle(string $text): ?string;
}
