<?php
/**
 * Tests for TokenDawn
 */

use PHPUnit\Framework\TestCase;
use Tokendawn\Tokendawn;

class TokendawnTest extends TestCase {
    private Tokendawn $instance;

    protected function setUp(): void {
        $this->instance = new Tokendawn(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokendawn::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
