<?php
declare(strict_types=1);

namespace Module\Sample\Adapter\Admin;

use MaliBoot\ApiAnnotation\ApiController;
use MaliBoot\ApiAnnotation\ApiGroup;
use MaliBoot\ApiAnnotation\ApiMapping;
use MaliBoot\ApiAnnotation\ApiPageResponse;
use MaliBoot\ApiAnnotation\ApiQuery;
use MaliBoot\ApiAnnotation\ApiRequest;
use MaliBoot\ApiAnnotation\ApiSingleResponse;
use MaliBoot\Cola\Adapter\AbstractController;
use MaliBoot\Di\Annotation\Inject;
use MaliBoot\Dto\EmptyVO;
use MaliBoot\Dto\IdVO;
use MaliBoot\Dto\PageVO;
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
#[ApiController(prefix: '/admin/example')]
#[ApiGroup('Example')]
class ExampleController extends AbstractController
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

    #[ApiMapping(path: '/listByPage', methods: ['GET'], name: 'Example列表')]
    #[ApiRequest(ExampleListByPageQry::class)]
    #[ApiPageResponse(ExampleVO::class)]
    public function listByPage(ExampleListByPageQry $exampleListByPageQry): PageVO
    {
        return $this->exampleListByPageQryExe->execute($exampleListByPageQry);
    }

    #[ApiMapping(path: '/create', methods: ['POST'], name: '创建Example')]
    #[ApiRequest(ExampleCreateCmd::class)]
    #[ApiSingleResponse(IdVO::class)]
    public function create(ExampleCreateCmd $exampleCreateCmd): IdVO
    {
        return $this->exampleCreateCmdExe->execute($exampleCreateCmd);
    }

    #[ApiMapping(path: '/update', methods: ['PUT'], name: '修改Example')]
    #[ApiRequest(ExampleUpdateCmd::class)]
    #[ApiSingleResponse(EmptyVO::class)]
    public function update(ExampleUpdateCmd $exampleUpdateCmd): EmptyVO
    {
        return $this->exampleUpdateCmdExe->execute($exampleUpdateCmd);
    }

    #[ApiMapping(path: '/delete', methods: ['DELETE'], name: '删除Example')]
    #[ApiQuery(name: 'id', type: 'int')]
    #[ApiSingleResponse(EmptyVO::class)]
    public function delete(int $id): EmptyVO
    {
        return $this->exampleDeleteCmdExe->execute($id);
    }

    #[ApiMapping(path: '/getById', methods: ['GET'], name: '获取单个Example信息')]
    #[ApiQuery(name: 'id', type: 'int')]
    #[ApiSingleResponse(ExampleVO::class)]
    public function getById(int $id): ExampleVO
    {
        return $this->exampleGetByIdQryExe->execute($id);
    }
}
