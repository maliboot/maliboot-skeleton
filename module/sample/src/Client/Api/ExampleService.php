<?php
declare(strict_types=1);

namespace Module\Sample\Client\Api;

use MaliBoot\Dto\EmptyVO;
use MaliBoot\Dto\IdVO;
use MaliBoot\Dto\PageVO;
use Module\Sample\Client\Dto\Command\ExampleCreateCmd;
use Module\Sample\Client\Dto\Command\ExampleUpdateCmd;
use Module\Sample\Client\Dto\Query\ExampleListByPageQry;
use Module\Sample\Client\ViewObject\ExampleVO;

/**
 * ExampleService.
 */
interface ExampleService
{
    public function listByPage(ExampleListByPageQry $exampleListByPageQry): PageVO;

    public function create(ExampleCreateCmd $exampleCreateCmd): IdVO;

    public function update(ExampleUpdateCmd $exampleUpdateCmd): EmptyVO;

    public function delete(int $id): EmptyVO;

    public function getById(int $id): ExampleVO;
}
