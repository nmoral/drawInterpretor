<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\Tests\FileSystem;

use Nmoral\Interpretor\FileSystem\Content\Content;
use Nmoral\Interpretor\FileSystem\ContentExtractor;
use Nmoral\Interpretor\FileSystem\File\File;
use Nmoral\Interpretor\Tests\DrawReaderInterface;
use PHPUnit\Framework\TestCase;

class ContentExtractorShould extends TestCase
{
    /**
     * @test
     */
    public function returnAContent(): void
    {
        $file = new File(DrawReaderInterface::TEST_FILE);
        $extractor = new ContentExtractor();
        $content = $extractor->extract($file);

        self::assertInstanceOf(Content::class, $content);
        self::assertSame(file_get_contents(DrawReaderInterface::TEST_FILE), $content->stringify());
    }
}
