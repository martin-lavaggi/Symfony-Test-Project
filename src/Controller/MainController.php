<?php

// Always name the namespace after its directory.

namespace App\Controller;

// Always name the class jus like the .php file.
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('<h1><strong>Starshop</strong>: your monopoly-busting option for Starship parts!</h1>');
    }
}
