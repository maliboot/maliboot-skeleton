<?php
declare(strict_types=1);

namespace Module\Sample\App\Executor\Query;

use MaliBoot\Cola\Annotation\AppService;
use MaliBoot\Cola\App\AbstractExecutor;
use MaliBoot\Di\Annotation\Inject;
use MaliBoot\Dto\PageVO;
use Module\Sample\Client\Dto\Query\ExampleListByPageQry;
use Module\Sample\Infra\Repository\ExampleQryRepo;

/**
 * ExampleListByPageQryExe.
 */
#[AppService]
class ExampleListByPageQryExe extends AbstractExecutor
{
    #[Inject]
    protected ExampleQryRepo $exampleQryRepo;

    public function execute(ExampleListByPageQry $exampleListByPageQry): PageVO
    {
//        // 需要数据库连接 todo
//        return $this->exampleQryRepo->listByPage($exampleListByPageQry);

        return \Hyperf\Support\make(PageVO::class);
    }
}
