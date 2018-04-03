<?php

namespace Odinsey\Tests\Connection;

use Doctrine\ORM\Tools\SchemaTool;
use Odinsey\Tests\TestCase;

class TearDownTest extends TestCase
{
    public function testSchemaDown()
    {
        $schemaTool = new SchemaTool($this->entityManager);
        $schemaTool->dropDatabase();

        $schemaManager = $this->entityManager->getConnection()->getSchemaManager();
        $tables = $schemaManager->listTableNames();
        $this->assertEmpty($tables);
    }
}
