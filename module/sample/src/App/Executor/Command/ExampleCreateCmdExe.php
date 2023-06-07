<?php
declare(strict_types=1);

namespace Module\Sample\App\Executor\Command;

use MaliBoot\Cola\Annotation\AppService;
use MaliBoot\Cola\App\AbstractExecutor;
use MaliBoot\Di\Annotation\Inject;
use MaliBoot\Dto\IdVO;
use Module\Sample\Client\Dto\Command\ExampleCreateCmd;
use Module\Sample\Domain\Model\Example\Example;
use Module\Sample\Domain\Repository\ExampleRepo;

/**
 * 示例.
 */
#[AppService]
class ExampleCreateCmdExe extends AbstractExecutor
{
    #[Inject]
    protected ExampleRepo $exampleRepo;

    public function execute(ExampleCreateCmd $exampleCreateCmd): IdVo
    {
        $params = Example::of($exampleCreateCmd->toArray());
        $result = $this->exampleRepo->create($params);
        return (new IdVO())->setId($result);
    }
}
