<?php
declare(strict_types=1);

namespace Denitsa\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris threw a grenade and killed 50 people, then it exploded.',
        'Death once had a near-Chuck-Norris experience.',
        'Once a cobra bit Chuck Norris\' leg. After five days of excruciating pain, the cobra died.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}