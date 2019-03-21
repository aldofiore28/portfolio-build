<?php

require '../../php-scripts/functions/getAdminInfo.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testGetUsernameInAStringSuccess()
    {
        $expected = 'ciaociao';
        $input = ['username'=>'ciaociao'];
        $case = getUsernameInAString($input);
        $this->assertEquals($expected, $case);
    }

    public function testGetUsernameInAStringFailure()
    {
        $expected = '';
        $input = ['password'=>'ciaociao'];
        $case = getUsernameInAString($input);
        $this->assertEquals($expected, $case);
    }

    public function testGetUsernameInAStringMalformedString()
    {
        $input = 'ciao';
        $this->expectException(TypeError::class);
        getUsernameInAString($input);
    }

    public function testGetUsernameInAStringMalformedInt()
    {
        $input = 12;
        $this->expectException(TypeError::class);
        getUsernameInAString($input);
    }

    public function testGetUsernameInAStringMalformedFloat()
    {
        $input = 45.2;
        $this->expectException(TypeError::class);
        getUsernameInAString($input);
    }

    public function testGetUsernameInAStringMalformedBoolean()
    {
        $input = true;
        $this->expectException(TypeError::class);
        getUsernameInAString($input);
    }

    public function testGetPasswordInAStringSuccess()
    {
        $expected = 'ciaociao';
        $input = ['password'=>'ciaociao'];
        $case = getPasswordInAString($input);
        $this->assertEquals($expected, $case);
    }

    public function testGetPasswordInAStringFailure()
    {
        $expected = '';
        $input = ['username'=>'ciaociao'];
        $case = getPasswordInAString($input);
        $this->assertEquals($expected, $case);
    }

    public function testGetPasswordInAStringMalformedString()
    {
        $input = 'ciao';
        $this->expectException(TypeError::class);
        getPasswordInAString($input);
    }

    public function testGetPasswordInAStringMalformedInt()
    {
        $input = 12;
        $this->expectException(TypeError::class);
        getPasswordInAString($input);
    }

    public function testGetPasswordInAStringMalformedFloat()
    {
        $input = 45.2;
        $this->expectException(TypeError::class);
        getPasswordInAString($input);
    }

    public function testGetPasswordInAStringMalformedBoolean()
    {
        $input = true;
        $this->expectException(TypeError::class);
        getPasswordInAString($input);
    }

    public function testCheckLoginSuccess()
    {
        $input = 'ciao';
        $input2 = 'ciao';
        $expected = true;
        $case = checkLogin($input, $input2);
        $this->assertEquals($expected, $case);
    }

    public function testCheckLoginSuccessNegative()
    {
        $input = 'ciao';
        $input2 = 'hello';
        $expected = false;
        $case = checkLogin($input, $input2);
        $this->assertEquals($expected, $case);
    }

    public function testCheckLoginSuccessNegative2()
    {
        $input = 'hello';
        $input2 = 'ciao';
        $expected = false;
        $case = checkLogin($input, $input2);
        $this->assertEquals($expected, $case);
    }

    public function testCheckLoginMalformedInputArrayString()
    {
        $input = ['hello'];
        $input2 = 'ciao';
        $this->expectException(TypeError::class);
        checkLogin($input, $input2);
    }

    public function testCheckLoginMalformedInputStringArray()
    {
        $input = 'hello';
        $input2 = ['ciao'];
        $this->expectException(TypeError::class);
        checkLogin($input, $input2);
    }

    public function testCheckLoginMalformedArrayArray()
    {
        $input = ['hello'];
        $input2 = ['ciao'];
        $this->expectException(TypeError::class);
        checkLogin($input, $input2);
    }
}