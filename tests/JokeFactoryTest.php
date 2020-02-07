<?php

declare(strict_types=1);

namespace Denitsa\ChuckNorrisJokes\Tests;

use Denitsa\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
            'Death once had a near-Chuck-Norris experience.',
            'Once a cobra bit Chuck Norris\' leg. After five days of excruciating pain, the cobra died.',
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
