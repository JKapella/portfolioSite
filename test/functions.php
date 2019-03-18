<?php

require '../functions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{
    public function testCheckIfEditingPostSuccess()
    {
        $expected = false;
        $input = [];
        $case = checkIfEditingPost($input);
        $this->assertEquals($expected, $case);
    }


}