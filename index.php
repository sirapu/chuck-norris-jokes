<?php

use sirapu\ChuckNorrisJokes\JokeFactory;

require __DIR__.'/vendor/autoload.php';

$factory = new JokeFactory();
$factory->hello();
