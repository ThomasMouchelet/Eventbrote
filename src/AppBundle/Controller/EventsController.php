<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Event;
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
        $event = new Event();
        $event->setName('Titre2')
                ->setLocation('Quebec')
                ->setPrice(90000);

        $em = $this->getDoctrine()->getManager();

        $em->persist($event);
        /*$em->flush();*/

        return $this->render('events/index.html.twig');
    }
}