<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\Tests\FileSystem;

use Nmoral\Interpretor\FileSystem\File\Extension;
use Nmoral\Interpretor\FileSystem\File\File;
use Nmoral\Interpretor\FileSystem\File\FileName;
use Nmoral\Interpretor\FileSystem\File\Name;
use Nmoral\Interpretor\FileSystem\File\Path;
use Nmoral\Interpretor\FileSystem\Read\FileReader;
use Nmoral\Interpretor\Tests\DrawReaderInterface;
use PHPUnit\Framework\TestCase;

class FileReaderShould extends TestCase
{
    /**
     * @test
     */
    public function returnAFile(): void
    {
        $fileReader = new FileReader();
        $file = $fileReader->read(DrawReaderInterface::TEST_FILE);

        self::assertInstanceOf(File::class, $file);
        self::assertSame(DrawReaderInterface::TEST_FILE, $file->getFullName());
        self::assertInstanceOf(Path::class, $file->getPath());
        self::assertSame('tests/resources', $file->getPath()->stringify());
        self::assertInstanceOf(FileName::class, $file->getFileName());
        self::assertSame('drawExample.xml', $file->getFileName()->stringify());
        self::assertInstanceOf(Name::class, $file->getFileName()->getName());
        self::assertSame('drawExample', $file->getFileName()->getName()->stringify());
        self::assertInstanceOf(Extension::class, $file->getFileName()->getExtension());
        self::assertSame('xml', $file->getFileName()->getExtension()->stringify());
    }
}
