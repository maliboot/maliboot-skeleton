<?php
declare(strict_types=1);

namespace Module\Sample\App\Executor\Command;

use MaliBoot\Cola\Annotation\AppService;
use MaliBoot\Cola\App\AbstractExecutor;
use MaliBoot\Di\Annotation\Inject;
use MaliBoot\Dto\EmptyVO;
use Module\Sample\Client\Dto\Command\ExampleUpdateCmd;
use Module\Sample\Domain\Model\Example\Example;
use Module\Sample\Domain\Repository\ExampleRepo;

/**
 * ExampleUpdateCmdExe.
 */
#[AppService]
class ExampleUpdateCmdExe extends AbstractExecutor
{
    #[Inject]
    protected ExampleRepo $exampleRepo;

    public function execute(ExampleUpdateCmd $exampleUpdateCmd): EmptyVO
    {
        $params = Example::of($exampleUpdateCmd->toArray());
        $this->exampleRepo->update($params);
        return make(EmptyVO::class);
    }
}
