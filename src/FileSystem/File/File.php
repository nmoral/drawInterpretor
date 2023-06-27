<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem\File;

use Nmoral\Interpretor\FileSystem\FileSystemInterface;

class File
{
    private Path $path;

    protected FileName $fileName;

    public function __construct(
        string $path
    )
    {
        $this->init($path);
    }

    public function getFileName(): FileName
    {
        return $this->fileName;
    }

    public function getFullName(): string
    {
        return $this->path->stringify().FileSystemInterface::FILE_SEPARATOR.$this->fileName->stringify();
    }

    public function getPath(): Path
    {
        return $this->path;
    }

    private function init(string $path): void
    {
        $parts = explode(FileSystemInterface::FILE_SEPARATOR, $path);
        $fileName = array_pop($parts);
        $this->path = new Path($parts);
        $this->fileName = new FileName($fileName);
    }
}
