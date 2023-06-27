<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\FileSystem\Content;

use Nmoral\Interpretor\FileSystem\File\File;
use Nmoral\Interpretor\Tests\DrawReaderInterface;

class Content
{
    private string $content;

    public function __construct(
        File $file,
    )
    {
        $this->init($file);
    }

    public function stringify(): string
    {
        return $this->content;
    }

    private function init(File $file)
    {
        $this->content = file_get_contents($file->getFullName());
    }
}
