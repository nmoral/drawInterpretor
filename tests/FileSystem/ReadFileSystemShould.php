<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\Tests\FileSystem;

use Nmoral\Interpretor\FileSystem\Content\Content;
use Nmoral\Interpretor\FileSystem\ReadFileSystem;
use Nmoral\Interpretor\Tests\DrawReaderInterface;
use PHPUnit\Framework\TestCase;

class ReadFileSystemShould extends TestCase
{
    /**
     * @test
     */
    public function takeAStringAndReturnAContent(): void
    {
        $fileSystem = new ReadFileSystem();
        $content = $fileSystem->read(DrawReaderInterface::TEST_FILE);

        self::assertInstanceOf(Content::class, $content);
    }
}
