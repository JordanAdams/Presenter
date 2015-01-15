<?php

class PresenterTest extends PHPUnit_Framework_TestCase
{
    protected $presenter;
    protected $model;

    public function setUp()
    {
        $this->model = new ModelStub('Jordan', 'Adams');
        $this->presenter = new PresenterStub($this->model);
    }

    public function testCanCallMethodsAsProperties()
    {
        $this->assertEquals('Jordan Adams', $this->presenter->fullName);
        $this->assertEquals('Hello Jordan', $this->presenter->sayHello);
    }

    public function testCanFallbackToModelProperty()
    {
        $this->assertEquals('Jordan', $this->presenter->firstName);
        $this->assertEquals('Adams', $this->presenter->surname);
    }
}