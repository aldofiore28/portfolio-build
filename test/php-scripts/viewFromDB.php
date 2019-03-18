<?php

require '../../php-scripts/viewFromDB.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testViewContentSuccess()
    {
        $expected = '<p>Ciaociao</p>';
        $input = [['section'=>'Ciaociao']];
        $case = viewContent($input);
        $this->assertEquals($expected, $case);
    }

    public function testViewContentMalformed()
    {
        $input = 'Ciaociao';
        $this->expectException(TypeError::class);
        viewContent($input);
    }

    public function testViewContentMalformed2()
    {
        $input = 43;
        $this->expectException(TypeError::class);
        viewContent($input);
    }
}