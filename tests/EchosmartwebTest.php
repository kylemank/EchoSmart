<?php
/**
 * Tests for EchoSmartWeb
 */

use PHPUnit\Framework\TestCase;
use Echosmartweb\Echosmartweb;

class EchosmartwebTest extends TestCase {
    private Echosmartweb $instance;

    protected function setUp(): void {
        $this->instance = new Echosmartweb(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Echosmartweb::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
