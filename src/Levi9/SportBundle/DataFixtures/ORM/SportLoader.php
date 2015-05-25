<?php

namespace Levi9\SportBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader;
use Nelmio\Alice\Fixtures;

class SportLoader extends DataFixtureLoader
{
    /**
     * {@inheritDoc}
     */
    protected function getFixtures()
    {
        return  array(
            __DIR__ . '/fixtures.yml',

        );
    }

    // todo: it's better to avoid any logic here (if possible)
    public function exercise()
    {
        $exercises = [
            'press',
            'squatting',
            'jumping',
        ];

        return $exercises[array_rand($exercises)];
    }
}
