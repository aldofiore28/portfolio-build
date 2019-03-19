<?php

require '../../php-scripts/functions/queryAddContent.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testCheckAddedTextWorkedSuccess()
    {
        $expected = '<p class="confirmation">The text has been added to the database!</p>';
        $input = true;
        $case = checkAddedTextWorked($input);
        $this->assertEquals($expected, $case);
    }

    public function testCheckAddedTextWorkedSucces2()
    {
        $expected = '<p class="error">There was a problem! The text has not been added to the database!</p>';
        $input = false;
        $case = checkAddedTextWorked($input);
        $this->assertEquals($expected, $case);
    }
}