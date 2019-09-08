<?php

namespace App\Test\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $client = self::createClient();
        $data = ["job" => ["text" => "Текст", "methods" => ["stripTags", "removeSpaces", "replaceSpacesToEol", "htmlspecialchars", "removeSymbols", "toNumber"]]];
        $client->request(
            'POST',
            '/',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode($data)
        );
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testWrongDataIndex()
    {
        $client = self::createClient();
        $data = ["job" => ["text" => "Текст", "methods" => ["stripTags", "removeSpaces", "replaceSpacesToEol", "htmlspecialchars", "removeSymbols", "toNumber", "wrongHandler"]]];
        $client->request(
            'POST',
            '/',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode($data)
        );
        $this->assertSame(500, $client->getResponse()->getStatusCode());
    }
}
