<?php
declare(strict_types=1);

namespace Module\Sample\App\Executor\Query;

use MaliBoot\Cola\Annotation\AppService;
use MaliBoot\Cola\App\AbstractExecutor;
use MaliBoot\Di\Annotation\Inject;
use Module\Sample\Client\ViewObject\ExampleVO;
use Module\Sample\Infra\Repository\ExampleQryRepo;

/**
 * ExampleGetByIdQryExe.
 */
#[AppService]
class ExampleGetByIdQryExe extends AbstractExecutor
{
    #[Inject]
    protected ExampleQryRepo $exampleQryRepo;

    public function execute(int $id): ExampleVO
    {
        $result = $this->exampleQryRepo->getById($id);
        return ExampleVO::ofDO($result);
    }
}
