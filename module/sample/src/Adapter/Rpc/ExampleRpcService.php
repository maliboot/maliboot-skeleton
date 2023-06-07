<?php
declare(strict_types=1);

namespace Module\Sample\Adapter\Rpc;

use MaliBoot\Dto\IdVO;
use MaliBoot\Dto\PageVO;
use MaliBoot\Dto\EmptyVO;
use MaliBoot\Cola\Adapter\AbstractRpcService;
use MaliBoot\Cola\Annotation\API;
use MaliBoot\Cola\Annotation\Method;
use MaliBoot\Di\Annotation\Inject;
use Module\Sample\Client\Api\ExampleService;
use Module\Sample\App\Executor\Command\ExampleCreateCmdExe;
use Module\Sample\App\Executor\Command\ExampleDeleteCmdExe;
use Module\Sample\App\Executor\Command\ExampleUpdateCmdExe;
use Module\Sample\App\Executor\Query\ExampleGetByIdQryExe;
use Module\Sample\App\Executor\Query\ExampleListByPageQryExe;
use Module\Sample\Client\Dto\Command\ExampleCreateCmd;
use Module\Sample\Client\Dto\Command\ExampleUpdateCmd;
use Module\Sample\Client\Dto\Query\ExampleListByPageQry;
use Module\Sample\Client\ViewObject\ExampleVO;

/**
 * 示例.
 */
#[API(name: '示例')]
class ExampleRpcService extends AbstractRpcService implements ExampleService
{
    #[Inject]
    protected ExampleListByPageQryExe $exampleListByPageQryExe;

    #[Inject]
    protected ExampleCreateCmdExe $exampleCreateCmdExe;

    #[Inject]
    protected ExampleUpdateCmdExe $exampleUpdateCmdExe;

    #[Inject]
    protected ExampleDeleteCmdExe $exampleDeleteCmdExe;

    #[Inject]
    protected ExampleGetByIdQryExe $exampleGetByIdQryExe;

    #[Method(name: '示例列表')]
    public function listByPage(ExampleListByPageQry $exampleListByPageQry): PageVO
    {
        return $this->exampleListByPageQryExe->execute($exampleListByPageQry);
    }

    #[Method(name: '创建示例信息')]
    public function create(ExampleCreateCmd $exampleCreateCmd): IdVO
    {
        return $this->exampleCreateCmdExe->execute($exampleCreateCmd);
    }

    #[Method(name: '修改示例信息')]
    public function update(ExampleUpdateCmd $exampleUpdateCmd): EmptyVO
    {
        return $this->exampleUpdateCmdExe->execute($exampleUpdateCmd);
    }

    #[Method(name: '删除示例信息')]
    public function delete(int $id): EmptyVO
    {
        return $this->exampleDeleteCmdExe->execute($id);
    }

    #[Method(name: '获取单个示例信息')]
    public function getById(int $id): ExampleVO
    {
        return $this->exampleGetByIdQryExe->execute($id);
    }
}
