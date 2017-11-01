<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventsController extends Controller
{
    /**
     * @Route("/events")
     */
    public function indexAction()
    {
        $tab = [
            'nom'       => 'Mouchelet',
            'prenom'    => 'Thomas',
            'Status'    => 'Formateur'
        ];

        return $this->render('events/index.html.twig',[
            'tab' => $tab
        ]);
    }
}