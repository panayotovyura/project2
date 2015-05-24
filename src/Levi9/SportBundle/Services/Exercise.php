<?php

namespace Levi9\SportBundle\Services;

use Levi9\SportBundle\Entity\Repository\ExerciseRepository;
use Levi9\SportBundle\Entity\User;

class Exercise
{
    /**
     * @var ExerciseRepository
     */
    private $exerciseRepository;

    public function __construct(ExerciseRepository $exerciseRepository)
    {
        $this->exerciseRepository = $exerciseRepository;
    }

    /**
     * Get list of exercises by user
     *
     * @param User $user
     *
     * @return mixed
     */
    public function getList(User $user)
    {
        return $this->exerciseRepository->findBy(['user' => $user]);
    }
}
