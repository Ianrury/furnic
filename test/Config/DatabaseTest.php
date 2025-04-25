<?php

namespace Importa\Furnic\PHP\FFI\Config;

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase{

    public function testGetConnection(): void
    {
        $connection = Database::getConnection("test");
        $this->assertInstanceOf(\PDO::class, $connection);
    }

    public function testGetConnectionProduction(): void
    {
        $connection = Database::getConnection("production");
        $this->assertInstanceOf(\PDO::class, $connection);
    }
}