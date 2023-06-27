<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem;

use Nmoral\Interpretor\FileSystem\Content\Content;

class ContentExtractor
{
    public function __construct()
    {
    }

    public function extract(File\File $file): Content
    {
        return new Content($file);
    }
}
