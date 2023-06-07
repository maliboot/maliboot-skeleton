<?php
declare(strict_types=1);

namespace Module\Sample\App\Executor\Command;

use MaliBoot\Cola\Annotation\AppService;
use MaliBoot\Cola\App\AbstractExecutor;
use MaliBoot\Di\Annotation\Inject;
use MaliBoot\Dto\EmptyVO;
use Module\Sample\Domain\Repository\ExampleRepo;

/**
 * ExampleDeleteCmdExe.
 */
#[AppService]
class ExampleDeleteCmdExe extends AbstractExecutor
{
    #[Inject]
    protected ExampleRepo $exampleRepo;

    public function execute(int $id): EmptyVO
    {
        $this->exampleRepo->delete($id);
        return make(EmptyVO::class);
    }
}
