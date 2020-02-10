<?php

namespace App\Controller;

use App\Repository\CardTemplateRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CardtemplateController extends AbstractController
{
    /**
     * @Route("/template", name="template")
     * @param CardTemplateRepository $cardTemplateRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(CardTemplateRepository $cardTemplateRepository)
    {$cards = $cardTemplateRepository->findAll();
        return $this->render('cardtemplate/index.html.twig', [
            'cards' => $cards,
        ]);
    }
}



