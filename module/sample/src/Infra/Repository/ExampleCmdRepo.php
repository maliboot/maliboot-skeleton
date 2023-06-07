<?php
declare(strict_types=1);

namespace Module\Sample\Infra\Repository;

use MaliBoot\Cola\Infra\AbstractCommandDBRepository;
use Module\Sample\Domain\Repository\ExampleRepo;
use Module\Sample\Infra\DataObject\ExampleDO;

/**
 * ExampleRepositoryImpl.
 */
class ExampleCmdRepo extends AbstractCommandDBRepository implements ExampleRepo
{
    protected function do(): string
    {
        return ExampleDO::class;
    }
}
