<?php

declare(strict_types=1);

namespace ValentinFilshin\OtusComposerPackage;

class StringProcessor
{
    public function getLength(string $string): int
    {
        return strlen($string);
    }
}