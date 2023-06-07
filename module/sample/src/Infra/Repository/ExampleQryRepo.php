<?php
declare(strict_types=1);

namespace Module\Sample\Infra\Repository;

use MaliBoot\Cola\Infra\AbstractQueryDBRepository;
use MaliBoot\Cola\Infra\QueryDBRepositoryInterface;
use Module\Sample\Infra\DataObject\ExampleDO;

/**
 * ExampleQueryRepo.
 */
class ExampleQryRepo extends AbstractQueryDBRepository implements QueryDBRepositoryInterface
{
    protected function do(): string
    {
        return ExampleDO::class;
    }
}
