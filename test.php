<?php

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    public function testHello(): void
    {
        $_GET['name'] = 'Fabien';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Fabien', $content);
    }
}
