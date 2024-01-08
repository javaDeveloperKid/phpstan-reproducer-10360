<?php

declare(strict_types=1);

namespace App\Service;

use App\Provider\MyProvider;

/**
 * @phpstan-import-type Foo from MyProvider
 */
class MyService
{
    /**
     * @param Foo $fooArray
     */
    public function doSth(array &$fooArray): void
    {
        // PHPStan should report that this `if` statement will always evaluate to false
        if (!array_key_exists('id', $fooArray['bar'])) {
            return;
        }

        // PHPStan should report that code at line 29 is unreachable 
        if (array_key_exists('id', $fooArray['bar'])) {
            return;
        }

        return;
    }
}
