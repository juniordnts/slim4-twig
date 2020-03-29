<?php

namespace src\controllers;

use src\controllers\Base;

class Home extends Base
{
    public function index($request, $response, $args)
    {
        return $this->twig->render($response, 'home.twig', [
            'title' => 'Home'
        ]);
    }
}