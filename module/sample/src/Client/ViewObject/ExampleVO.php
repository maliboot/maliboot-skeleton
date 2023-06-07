<?php
declare(strict_types=1);

namespace Module\Sample\Client\ViewObject;

use MaliBoot\Dto\Annotation\Field;
use MaliBoot\Dto\Annotation\ViewObject;
use MaliBoot\Dto\AbstractViewObject;

/**
 * ExampleVO.
 *
 * @method string getId() 获取ID.
 * @method self setId(string $id) 设置ID.
 * @method string getName() 获取名称.
 * @method self setName(string $name) 设置名称.
 */
#[ViewObject(name: 'Example')]
class ExampleVO extends AbstractViewObject
{

    #[Field(name: 'ID', type: 'string')]
    private string $id;

    #[Field(name: '名称', type: 'string')]
    private string $name;
}
