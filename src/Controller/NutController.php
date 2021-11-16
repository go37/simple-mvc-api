<?php

namespace App\Controller;

use App\Model\NutManager;

class NutController extends AbstractAPIController
{
    public function index(): string
    {
        $nutManager = new NutManager();
        $nuts = $nutManager->stockList();

        return $this->twig->render('Item/nuts.html.twig', ['nuts' => $nuts]);
    }
}
