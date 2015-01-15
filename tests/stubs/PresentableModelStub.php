<?php

use JordanAdams\Presenter\PresentableTrait;

class PresentableModelStub
{
    use PresentableTrait;

    public $firstName;
    public $surname;
    public $presenter = 'JordanAdams\Presenter\Presenter';

    function __construct($firstName, $surname)
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
    }
} 