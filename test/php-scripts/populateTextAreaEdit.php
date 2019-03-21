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
        $expected = '';
        $case = generateHiddenInputWithId($input);
        $this->assertEquals($expected, $case);
    }

    public function testGenerateHiddenInputWithIdFailureString() {
        $input = 'ciao4';
        $expected = '';
        $case = generateHiddenInputWithId($input);
        $this->assertEquals($expected, $case);
    }

    public function testGenerateHiddenInputWithIdFailureNumberAndString() {
        $input = '12b';
        $expected = '';
        $case = generateHiddenInputWithId($input);
        $this->assertEquals($expected, $case);
    }

    public function testPrintSelectedItemSuccess () {
        $input = ['section'=>'ciao'];
        $expected = 'ciao';
        $case = printSelectedItem($input);
        $this->assertEquals($expected, $case);
    }

    public function testPrintSelectedItemFailure() {
        $input = ['section1'=>'ciao'];
        $expected = '';
        $case = printSelectedItem($input);
        $this->assertEquals($expected, $case);
    }

    public function testPrintSelectedItemMalformed() {
        $input = 43;
        $this->expectException(TypeError::class);
        printSelectedItem($input);
    }

    public function testPrintSelectedItemMalformedFloat() {
        $input = 45.2;
        $this->expectException(TypeError::class);
        printSelectedItem($input);
    }

    public function testPrintSelectedItemMalformedString() {
        $input = 'test';
        $this->expectException(TypeError::class);
        printSelectedItem($input);
    }
}