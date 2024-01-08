<?php

declare(strict_types=1);

namespace App\Provider;

/**
 * @phpstan-type Bar array{
 *      id: string|null,
 * }

 * @phpstan-type Foo array{
 *     bar: Bar,
 * }
 */
class MyProvider
{
}
