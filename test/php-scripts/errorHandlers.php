<?php

require '../../php-scripts/functions/errorHandlers.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testResultQueryErrorsSuccess()
    {
        $input = true;
        $expected = '<p class="confirmation">Operation Successful</p>';
        $case = resultQueryErrors($input);
        $this->assertEquals($expected, $case);
    }

    public function testResultQueryErrorsSuccess2()
    {
        $input = false;
        $expected = '<p class="error">Fatal Error!</p>';
        $case = resultQueryErrors($input);
        $this->assertEquals($expected, $case);
    }

    public function testResultQueryErrorsMalformed()
    {
        $input = ['gjghg'];
        $this->expectException(TypeError::class);
        resultQueryErrors($input);
    }
}