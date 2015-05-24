<?php
namespace Levi9\SportBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Levi9\SportBundle\Services\Exercise;
use Levi9\SportBundle\Entity\User;
use Levi9\SportBundle\Entity\Exercise as ExerciseEntity;
use Levi9\SportBundle\Entity\Repository\ExerciseRepository;

class ExerciseTest extends WebTestCase
{
    /**
     * @dataProvider getListProvider
     */
    public function testGetList($data)
    {
        $service = new Exercise($this->mockRepository($data));
        $this->assertEquals(
            $data,
            $service->getList(new User())
        );
    }

    public function getListProvider()
    {
        return [
            [
                []
            ],
            [
                [new ExerciseEntity()]
            ]
        ];
    }

    /**
     * @param $returnData
     *
     * @return ExerciseRepository
     */
    private function mockRepository($returnData)
    {
        $repository = $this->getMockBuilder('Levi9\SportBundle\Entity\Repository\ExerciseRepository')
            ->disableOriginalConstructor()
            ->getMock();

        $repository->expects($this->once())
            ->method('findBy')
            ->will($this->returnValue($returnData));

        return $repository;
    }
}
