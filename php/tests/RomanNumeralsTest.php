<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RomanNumerals;
use PHPUnit\Framework\TestCase;

final class RomanNumeralsTest extends TestCase
{
    /** @test */
    public function is_true_when_true(): void
    {
        $result = (new RomanNumerals())->transformNumber();

        self::assertSame(true, $result);
    }
}
