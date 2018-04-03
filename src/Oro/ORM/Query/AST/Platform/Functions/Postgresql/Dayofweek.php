<?php

namespace Odinsey\ORM\Query\AST\Platform\Functions\Postgresql;

use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\SqlWalker;
use Odinsey\ORM\Query\AST\Functions\SimpleFunction;

class Dayofweek extends AbstractTimestampAwarePlatformFunctionNode
{
    /**
     * {@inheritdoc}
     */
    public function getSql(SqlWalker $sqlWalker)
    {
        /** @var Node $expression */
        $expression = $this->parameters[SimpleFunction::PARAMETER_KEY];
        return 'EXTRACT(DOW FROM ' . $this->getTimestampValue($expression, $sqlWalker) . ') + 1';
    }
}
