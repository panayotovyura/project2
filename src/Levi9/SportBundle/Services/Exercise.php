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

    public function __construct(ExerciseRepository $exerciseRepository) {
        $this->exerciseRepository = $exerciseRepository;
    }

    public function getList(User $user) {
        return $this->exerciseRepository->findByUser(['user' => $user]);
    }
}