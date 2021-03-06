<?php

require '../../php-scripts/functions/populateDropdown.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{

    public function testPopulateDropdownSuccess ()
    {
        $expected = '<option value="2">ciao</option>';
        $input = [['id' => 2, 'section'=>'ciao']];
        $case = populateDropdownEdit($input);
        $this->assertEquals($case, $expected);
    }

    public function testPopulateDropdownFailure ()
    {
        $expected = '';
        $input = [['blabla'=>'ciao']];
        $case = populateDropdownEdit($input);
        $this->assertEquals($expected, $case);
    }

    public function testPopulateDropdownMalformedInt() {
        $input = 1;
        $this->expectException(TypeError::class);
        populateDropdownEdit($input);
    }

    public function testPopulateDropdownMalformedFloat() {
        $input = 3.2;
        $this->expectException(TypeError::class);
        populateDropdownEdit($input);
    }

    public function testPopulateDropdownMalformedString() {
        $input = 'ciao';
        $this->expectException(TypeError::class);
        populateDropdownEdit($input);
    }
}