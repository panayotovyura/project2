<?php

namespace Levi9\SportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CalendarController extends Controller
{

    /**
     * @Route("/exercises", name="exercises")
     * @Template()
     */
    public function exercisesAction()
    {
        return ['exercises' => $this->container->get('sport.exercise')->getList($this->getUser())];
    }
}
