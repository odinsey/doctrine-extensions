<?php

namespace Odinsey\ORM\Query\AST\Platform\Functions\Postgresql;

use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\SqlWalker;
use Odinsey\ORM\Query\AST\Functions\SimpleFunction;

class Minute extends AbstractTimestampAwarePlatformFunctionNode
{
    /**
     * {@inheritdoc}
     */
    public function getSql(SqlWalker $sqlWalker)
    {
        /** @var Node $expression */
        $expression = $this->parameters[SimpleFunction::PARAMETER_KEY];
        return 'EXTRACT(MINUTE FROM ' . $this->getTimestampValue($expression, $sqlWalker) . ')';
    }
}
