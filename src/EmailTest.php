<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require __DIR__ . "/Email.php";

class EmailTest extends TestCase
{

    public function testFromString()
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
