<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem\File;

use Nmoral\Interpretor\FileSystem\FileSystemInterface;

class Path
{
    private string $path;

    public function __construct(
        array $parts,
    )
    {
        $this->init($parts);
    }

    public function stringify(): string
    {
        return $this->path;
    }

    private function init(array $parts)
    {
        $this->path = implode(FileSystemInterface::FILE_SEPARATOR, $parts);
    }
}
