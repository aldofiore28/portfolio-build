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

    public function testPrintSelectedItemMalformed2() {
        $input = 45.2;
        $this->expectException(TypeError::class);
        printSelectedItem($input);
    }

    public function testPrintSelectedItemMalformed3() {
        $input = 'test';
        $this->expectException(TypeError::class);
        printSelectedItem($input);
    }
}