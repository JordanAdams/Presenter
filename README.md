##Presenter

A simple framework-agnostic model presenter for php.

####Setup

Just use the `PresentableTrait` and add a presenter property to your model

```php
use JordanAdams\Presenter\Presenter;
use JordanAdams\Presenter\PresentableTrait;

class MyModel {

    use PresentableTrait;

    protected $presenter = 'MyPresenter';
    protected $firstName = 'Jordan';
    protected $surname   = 'Adams';

}

class MyPresenter extends Presenter {

    public function fullName() {
        return $this->model->firstName . ' ' . $this->model->surname; // Jordan Adams
    }

}
```


Alternatively, roll your own `presenter()` method

```php
use JordanAdams\Presenter\Presenter;

class MyModel {

    protected $presenter = 'MyPresenter';
    protected $firstName = 'Jordan';
    protected $surname   = 'Adams';

    public function presenter() {
        return new $this->presenter($this);
    }

}

class MyPresenter extends Presenter {

    public function fullName() {
        return $this->model->firstName . ' ' . $this->model->surname;
    }

}
```

####Usage

Access the presenter methods as expected

```php
$model = new MyModel();
$model->presenter()->fullName() // Jordan Adams
```

Or use property style retrieval

```php
$model->presenter()->fullName // Jordan Adams
```

The presenter will also fallback to a model property if available

```php
$model->presenter()->firstName // Jordan
```

####License

The MIT License (MIT)

Copyright (c) 2014 Jordan Adams

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.