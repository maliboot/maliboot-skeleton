<?php
declare(strict_types=1);

namespace Module\Sample\Client\Dto\Command;

use MaliBoot\Dto\Annotation\DataTransferObject;
use MaliBoot\Dto\Annotation\Field;
use MaliBoot\Dto\AbstractCommand;

/**
 * ExampleUpdateCmd.
 *
 * @method string getId() 获取ID.
 * @method self setId(string $id) 设置ID.
 * @method string getName() 获取名称.
 * @method self setName(string $name) 设置名称.
 */
#[DataTransferObject(name: 'Example', type: 'command')]
class ExampleUpdateCmd extends AbstractCommand
{

    #[Field(name: 'ID', type: 'string')]
    private string $id;

    #[Field(name: '名称', type: 'string')]
    private string $name;
}
