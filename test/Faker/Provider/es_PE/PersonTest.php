<?php

namespace Faker\Test\Provider\es_PE;

use Faker\Generator;
use Faker\Provider\es_PE\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    /**
     * @var Generator
     */
    private $faker;

    protected function setUp(): void
    {
        $faker = new Generator();
        $faker->seed(1);
        $faker->addProvider(new Person($faker));
        $this->faker = $faker;
    }

    public function testDNI()
    {
        $dni = $this->faker->dni;
        $this->assertMatchesRegularExpression('/\A[0-9]{8}\Z/', $dni);
    }
}
