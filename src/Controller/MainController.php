<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\SectionRepository;

class MainController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    # appel du gestionnaire de section
    public function index(SectionRepository $sections): Response
    {
        return $this->render(
            'main/index.html.twig', [
                'title' => 'Homepage',
                'homepage_text'=> "Nous somme le ".date('d/m/Y \à H:i'
                ),
                # on met dans une variable pour twig toutes les sections récupérés
                'sections' => $sections->findAll(),
            ]
        );
    }

    // création de l'url pour le détail d'une section
 
    
}
