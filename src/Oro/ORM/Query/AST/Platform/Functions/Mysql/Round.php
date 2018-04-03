<?php
/**
 * Created by PhpStorm.
 * User: albion
 * Date: 17-12-14
 * Time: 10.44.PD
 */

namespace Odinsey\ORM\Query\AST\Platform\Functions\Mysql;

use Odinsey\ORM\Query\AST\Functions\Numeric\Round as BaseRound;
use Odinsey\ORM\Query\AST\Platform\Functions\PlatformFunctionNode;
use Doctrine\ORM\Query\SqlWalker;

class Round extends PlatformFunctionNode
{
    /**
     * {@inheritdoc}
     */
    public function getSql(SqlWalker $sqlWalker)
    {
        $value = $this->parameters[BaseRound::VALUE];
        $round = $this->parameters[BaseRound::PRECISION];

        return sprintf(
            'ROUND(%s, %s)',
            $this->getExpressionValue($value, $sqlWalker),
            $this->getExpressionValue($round, $sqlWalker)
        );
    }
}
