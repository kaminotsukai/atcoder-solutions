<?php declare(strict_types = 1);

function randomNumbersArray(): array
{
    $random_numbers = range(0, 1000);
    shuffle($random_numbers);
    $numbers = array_splice($random_numbers, 0, 10);

    return $numbers;
}