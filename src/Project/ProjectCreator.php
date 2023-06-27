<?php

declare(strict_types=1);

namespace Nmoral\Interpretor\Project;

class ProjectCreator
{
    public function __construct()
    {
    }

    public function createFrom(string $fileName): Project
    {
        return new Project();
    }
}
