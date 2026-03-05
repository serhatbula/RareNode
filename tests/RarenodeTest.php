<?php
/**
 * Tests for RareNode
 */

use PHPUnit\Framework\TestCase;
use Rarenode\Rarenode;

class RarenodeTest extends TestCase {
    private Rarenode $instance;

    protected function setUp(): void {
        $this->instance = new Rarenode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Rarenode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
