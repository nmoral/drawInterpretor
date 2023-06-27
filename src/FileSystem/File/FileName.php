<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem\File;

use Nmoral\Interpretor\FileSystem\FileSystemInterface;

class FileName
{
    private Extension $extension;

    private Name $name;

    public function __construct(
        string $fileName,
    )
    {
        $this->init($fileName);
    }

    public function getExtension(): Extension
    {
        return $this->extension;
    }

    public function getName(): Name
    {
        return $this->name;
    }

    public function stringify(): string
    {
        return sprintf("%s%s%s", $this->name->stringify(), FileSystemInterface::EXTENSION_SEPARATOR, $this->extension->stringify());
    }

    private function init(string $fileName)
    {
        $parts = explode(FileSystemInterface::EXTENSION_SEPARATOR, $fileName);
        $extension = array_pop($parts);
        $this->extension = new Extension($extension);
        $this->name = new Name($parts);
    }
}
