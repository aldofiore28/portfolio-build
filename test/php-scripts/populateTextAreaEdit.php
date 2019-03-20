<?php

require '../../php-scripts/functions/populateTextAreaEdit.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testGenerateHiddenInputWithIdSuccess() {
        $input = 10;
        $expected = '<input type="hidden" value="10" name="editId">';
        $case = generateHiddenInputWithId($input);
        $this->assertEquals($expected, $case);
    }

    public function testGenerateHiddenInputWithIdFailure() {
        $input = 'ciao';
        $expected = '<input type="hidden" value="0" name="editId">';
        $case = generateHiddenInputWithId($input);
        $this->assertEquals($expected, $case);
    }

    public function testGenerateHiddenInputWithIdFailure2() {
        $input = 'ciao4';
        $expected = '<input type="hidden" value="0" name="editId">';
        $case = generateHiddenInputWithId($input);
        $this->assertEquals($expected, $case);
    }

    public function testGenerateHiddenInputWithIdFailure3() {
        $input = '12b';
        $expected = '<input type="hidden" value="0" name="editId">';
        $case = generateHiddenInputWithId($input);
        $this->assertEquals($expected, $case);
    }
}