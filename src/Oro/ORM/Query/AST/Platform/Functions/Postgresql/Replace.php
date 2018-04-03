<?php

namespace Odinsey\ORM\Query\AST\Platform\Functions\Postgresql;

use Odinsey\ORM\Query\AST\Functions\String\Replace as Base;
use Odinsey\ORM\Query\AST\Platform\Functions\PlatformFunctionNode;
use Doctrine\ORM\Query\SqlWalker;

class Replace extends PlatformFunctionNode
{
    /**
     * {@inheritdoc}
     */
    public function getSql(SqlWalker $sqlWalker)
    {
        $strings = array();
        $subject = $this->parameters[Base::SUBJECT_KEY];
        $from = $this->parameters[Base::FROM_KEY];
        $to = $this->parameters[Base::TO_KEY];

        return sprintf(
            'REPLACE(%s, %s, %s)',
            $this->getExpressionValue($subject, $sqlWalker),
            $this->getExpressionValue($from, $sqlWalker),
            $this->getExpressionValue($to, $sqlWalker)
        );
    }
}
