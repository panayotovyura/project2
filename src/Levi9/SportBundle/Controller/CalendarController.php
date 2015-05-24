<?php

namespace Levi9\SportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CalendarController extends Controller
{

    /**
     * @Route("/{_locale}/exercises", requirements={"_locale" = "en|ru"}, defaults={"_locale" = "en"}, name="exercises")
     * @Template()
     */
    public function exercisesAction()
    {

        dump($this->container->get('doctrine')->getManager()->getRepository('Levi9SportBundle:User')->findAll());
        return [];
    }
}