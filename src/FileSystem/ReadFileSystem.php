<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem;

use Nmoral\Interpretor\FileSystem\Read\FileReader;

class ReadFileSystem
{
    public function read(string $fileName): Content\Content
    {
        $file = $this->getFile($fileName);

        return $this->getContent($file);
    }

    private function getContent(File\File $file): Content\Content
    {
        $extractor = new ContentExtractor();

        return $extractor->extract($file);
    }

    private function getFile(string $fileName): File\File
    {
        $reader = new FileReader();

        return $reader->read($fileName);
    }
}
