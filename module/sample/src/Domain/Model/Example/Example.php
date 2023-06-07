<?php
declare(strict_types=1);

namespace Module\Sample\Domain\Model\Example;

use MaliBoot\Cola\Annotation\AggregateRoot;
use MaliBoot\Cola\Annotation\Field;
use MaliBoot\Cola\Domain\AbstractEntity;
use MaliBoot\Cola\Domain\AggregateRootInterface;

/**
 * 示例
 *
 * @method string getId() 获取ID.
 * @method self setId(string $id) 设置ID.
 * @method string getName() 获取名称.
 * @method self setName(string $name) 设置名称.
 */
#[AggregateRoot(name: "Example", desc: "示例")]
class Example extends AbstractEntity implements AggregateRootInterface
{

    #[Field(name: 'ID')]
    private string $id;

    #[Field(name: '名称')]
    private string $name;
}