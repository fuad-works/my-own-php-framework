<?php

use PHPUnit\Framework\TestCase;

final class test extends TestCase
{
    public function testHello(): void
    {
        $_GET['name'] = 'Fabien';

        ob_start();
        include 'hello.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Fabien', $content);
    }
}
