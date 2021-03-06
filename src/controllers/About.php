<?php

namespace src\controllers;

use src\controllers\Base;

class About extends Base
{
    public function index($request, $response, $args)
    {
        return $this->getTwig()->render($response, 'about.html', [
            'title' => 'About'
        ]);
    }
}