<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem\File;

use Nmoral\Interpretor\FileSystem\FileSystemInterface;

class Name
{
    private string $name;

    public function __construct(
        array $parts,
    )
    {
        $this->init($parts);
    }

    public function stringify(): string
    {
        return $this->name;
    }

    private function init(array $parts): void
    {
        $this->name = implode(FileSystemInterface::EXTENSION_SEPARATOR, $parts);
    }
}
