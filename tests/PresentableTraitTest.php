<?php

class PresentableTraitTest extends PHPUnit_Framework_TestCase
{
    protected $model;

    public function setUp()
    {
        $this->model = new PresentableModelStub('Jordan', 'Adams');
    }

    public function testAddsPresenterMethod()
    {
        $this->assertTrue(method_exists($this->model, 'presenter'));
    }

    public function testPresenterMethodReturnsPresenter()
    {
        $this->assertInstanceOf($this->model->presenter, $this->model->presenter());
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testMissingPresenterProperty()
    {
        $badModel = $this->model;
        $badModel->presenter = null;

        $badModel->presenter()->sayHello();
    }
} 