<?php

use PHPUnit\Framework\TestCase;

class PageTest extends TestCase
{
    public function testHomePageLoads()
    {
        $html = file_get_contents('http://localhost:8080');

        $this->assertNotFalse($html, "La page ne répond pas");

        $this->assertStringContainsString(
            '<h1>R6.06 Maintenance applicative</h1>',
            $html,
            "Le titre principal n'est pas présent dans la page"
        );
    }
}