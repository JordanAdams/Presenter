<?php

use JordanAdams\Presenter\Presenter;

class PresenterStub extends Presenter {

    public function fullName() {
        return $this->model->firstName . ' ' . $this->model->surname;
    }

    public function sayHello() {
        return 'Hello ' . $this->model->firstName;
    }

} 