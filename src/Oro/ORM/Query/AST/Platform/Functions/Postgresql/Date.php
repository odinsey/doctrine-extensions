<?php

namespace Odinsey\ORM\Query\AST\Platform\Functions\Postgresql;

use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\SqlWalker;
use Odinsey\ORM\Query\AST\Functions\SimpleFunction;
use Odinsey\ORM\Query\AST\Platform\Functions\PlatformFunctionNode;

class Date extends PlatformFunctionNode
{
    /**
     * {@inheritdoc}
     */
    public function getSql(SqlWalker $sqlWalker)
    {
        /** @var Node $expression */
        $expression = $this->parameters[SimpleFunction::PARAMETER_KEY];
        return 'DATE(' . $this->getExpressionValue($expression, $sqlWalker) . ')';
    }
}
