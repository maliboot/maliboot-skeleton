<?php
declare(strict_types=1);

namespace Module\Sample\Infra\DataObject;

use MaliBoot\Cola\Infra\AbstractDatabaseDO;
use MaliBoot\Cola\Annotation\Column;
use MaliBoot\Cola\Annotation\DataObject;
use Module\Sample\Domain\Model\Example\Example;

/**
 * 示例
 *
 * @method string getId() 获取ID.
 * @method self setId(string $id) 设置ID.
 * @method string getName() 获取名称.
 * @method self setName(string $name) 设置名称.
 */
#[DataObject(name: 'Example', table: "example", connection: "default")]
class ExampleDO extends AbstractDatabaseDO
{

    #[Column(name: "id", desc: "ID", type: "string")]
    private string $id;

    #[Column(name: "name", desc: "名称", type: "string")]
    private string $name;
}
