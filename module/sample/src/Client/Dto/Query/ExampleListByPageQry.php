<?php
declare(strict_types=1);

namespace Module\Sample\Client\Dto\Query;

use MaliBoot\Dto\Annotation\DataTransferObject;
use MaliBoot\Dto\AbstractPageQuery;

/**
 * ExampleListByPageQry.
 */
#[DataTransferObject(name: 'Example', type: 'query')]
class ExampleListByPageQry extends AbstractPageQuery
{
}
