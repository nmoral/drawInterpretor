<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\Tests;

use Nmoral\Interpretor\Project\Project;
use Nmoral\Interpretor\Project\ProjectCreator;
use PHPUnit\Framework\TestCase;

class MainShould extends TestCase
{
    /**
     * @test
     */
    public function runWithoutError(): void
    {
        $projectCreator = new ProjectCreator();
        $project = $projectCreator->createFrom(DrawReaderInterface::TEST_FILE);

        self::assertInstanceOf(Project::class, $project);
    }
}
