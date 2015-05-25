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
        $user = $this->getUser();

        // todo: why are you doing this check here? Symfony should handle unauthenticated users and
        // make redirects automatically
        if (!$user) {
            return new RedirectResponse(
                $this->get('router')->generate('login_route')
            );
        }

        return ['exercises' => $this->container->get('sport.exercise')->getList($user)];
    }
}
