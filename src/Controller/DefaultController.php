<?php

namespace App\Controller;

use App\TextHandler\TextHandlerFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $data = [];
            if ($content = $request->getContent()) {
                $data = json_decode($content, true);
            }
            if (!(isset($data['job']) && count($data['job']))) {
                throw new \Exception('Data is invalid.');
            }
            $job = $data['job'];
            $text = $job['text'];
            $factory = new TextHandlerFactory();
            foreach ($job['methods'] as $method) {
                $handler = $factory->createTextHandler($method);
                $text = $handler->handle($text);
            }

            return new JsonResponse(["text" => $text]);
        } catch (\Throwable $e) {
            return new JsonResponse($e->getMessage(), 500);
        }
    }

}
