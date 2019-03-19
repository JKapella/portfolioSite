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

    public function testCheckIfEditingPostSuccessCorrect()
    {
        $expected = true;
        $input = ['content'=>'This content should be valid.'];
        $case = checkIfEditingPost($input);
        $this->assertEquals($expected, $case);
    }

    public function testCheckIfEditingPostFail()
    {
        $expected = false;
        $input = ['content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor lectus non tempus congue. Integer tincidunt quam magna, non rutrum dolor faucibus consectetur. Ut a auctor arcu. In mauris eros, rhoncus sed erat ac, bibendum tempor lacus. Nullam non enim non metus pharetra mollis. In quis nibh libero. Vestibulum pellentesque, nulla sit amet dapibus pellentesque, nisi nunc egestas nisl, sit amet ullamcorper dolor elit vitae velit. Nam massa ipsum, tristique eleifend molestie a, volutpat eget velit. Aenean euismod tincidunt risus. Quisque nulla ex, maximus at cursus id, consequat ut urna. Quisque feugiat nunc risus, ac laoreet lorem aliquam nec. Morbi porttitor vitae tortor in posuere. Aliquam eleifend nunc ac interdum blandit. Cras sit amet imperdiet eros, non iaculis magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor lectus non tempus congue. Integer tincidunt quam magna, non rutrum dolor faucibus consectetur. Ut a auctor arcu. In mauris eros, rhoncus sed erat ac, bibendum tempor lacus. Nullam non enim non metus pharetra mollis. In quis nibh libero. Vestibulum pellentesque, nulla sit amet dapibus pellentesque, nisi nunc egestas nisl, sit amet ullamcorper dolor elit vitae velit. Nam massa ipsum, tristique eleifend molestie a, volutpat eget velit. Aenean euismod tincidunt risus. Quisque nulla ex, maximus at cursus id, consequat ut urna. Quisque feugiat nunc risus, ac laoreet lorem aliquam nec. Morbi porttitor vitae tortor in posuere. Aliquam eleifend nunc ac interdum blandit. Cras sit amet imperdiet eros, non iaculis magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor lectus non tempus congue. Integer tincidunt quam magna, non rutrum dolor faucibus consectetur. Ut a auctor arcu. In mauris eros, rhoncus sed erat ac, bibendum tempor lacus. Nullam non enim non metus pharetra mollis. In quis nibh libero. Vestibulum pellentesque, nulla sit amet dapibus pellentesque, nisi nunc egestas nisl, sit amet ullamcorper dolor elit vitae velit. Nam massa ipsum, tristique eleifend molestie a, volutpat eget velit. Aenean euismod tincidunt risus. Quisque nulla ex, maximus at cursus id, consequat ut urna. Quisque feugiat nunc risus, ac laoreet lorem aliquam nec. Morbi porttitor vitae tortor in posuere. Aliquam eleifend nunc ac interdum blandit. Cras sit amet imperdiet eros, non iaculis magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor lectus non tempus congue. Integer tincidunt quam magna, non rutrum dolor faucibus consectetur. Ut a auctor arcu. In mauris eros, rhoncus sed erat ac, bibendum tempor lacus. Nullam non enim non metus pharetra mollis. In quis nibh libero. Vestibulum pellentesque, nulla sit amet dapibus pellentesque, nisi nunc egestas nisl, sit amet ullamcorper dolor elit vitae velit. Nam massa ipsum, tristique eleifend molestie a, volutpat eget velit. Aenean euismod tincidunt risus. Quisque nulla ex, maximus at cursus id, consequat ut urna. Quisque feugiat nunc risus, ac laoreet lorem aliquam nec. Morbi porttitor vitae tortor in posuere. Aliquam eleifend nunc ac interdum blandit. Cras sit amet imperdiet eros, non iaculis magna.'];
        $case = checkIfEditingPost($input);
        $this->assertEquals($expected, $case);
    }

    public function testCheckIfEditingPostFailInvalidArray()
    {
        $expected = false;
        $input = [['content'=>'content']];
        $case = checkIfEditingPost($input);
        $this->assertEquals($expected, $case);
    }

    public function testCheckIfEditingPostMalformed()
    {
        $input = 'array';
        $this->expectException(TypeError::class);
        checkIfEditingPost($input);
    }

    public function  testFormatLastUpdatedInfoSuccess()
    {
        $expected = 'Last updated - 2019-02-28 07:06:16';
        $input = ['post_time'=>'2019-02-28 07:06:16'];
        $case = formatLastUpdatedInfo($input);
        $this->assertEquals($expected, $case);
    }

    public function  testFormatLastUpdatedInfoFail()
    {
        $expected = 'Please write a new post!';
        $input = ['cheese'=>'cheesy'];
        $case = formatLastUpdatedInfo($input);
        $this->assertEquals($expected, $case);
    }

    public function  testFormatLastUpdatedInfoMalformed()
    {
        $input = '42';
        $this->expectException(TypeError::class);
        formatLastUpdatedInfo($input);
    }

}