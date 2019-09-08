<?php

namespace App\TextHandler;


class TextHandlerFactory
{
    /**
     * @param string $type
     *
     * @return TextHandler     *
     * @throws \Exception
     */
    public function createTextHandler(string $type): TextHandler
    {
        $className = 'App\TextHandler\\' . ucfirst($type) . 'TextHandler';
        if (class_exists($className)) {
            return new $className();
        } else {
            throw new \Exception($type . ': Unknown handler type');
        }
    }
}
