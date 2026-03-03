<?php

use PHPUnit\Framework\TestCase;

class PageTest extends TestCase
{
    public function testHomePageRenders()
    {
        ob_start();
        require __DIR__ . '/../src/index.php';
        $html = ob_get_clean();

        $this->assertNotEmpty($html);

        $this->assertStringContainsString(
            '<h1>R6.06 Maintenance applicative</h1>',
            $html
        );
    }
}