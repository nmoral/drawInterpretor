<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem\Read;

use Nmoral\Interpretor\FileSystem\File\File;

class FileReader
{
    public function __construct()
    {
    }

    public function read(string $file): File
    {
        return new File($file);
    }
}
