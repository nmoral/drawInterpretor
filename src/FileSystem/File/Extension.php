<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem\File;

class Extension
{
    public function __construct(
        private readonly string $extension,
    )
    {
    }

    public function stringify(): string
    {
        return $this->extension;
    }
}
