<?php namespace JordanAdams\Presenter;

class Presenter
{
    protected $model;

    /**
     * @param $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * Checks if model has public property
     *
     * @param $property
     * @return bool
     */
    private function modelHasPublicProperty($property)
    {
        $reflectionProperty = new \ReflectionProperty($this->model, $property);

        return $reflectionProperty->isPublic();
    }

    /**
     * Try get a presenter method
     *
     * @param $key
     * @return mixed
     */
    public function __get($key)
    {
        if (method_exists($this, $key)) {

            return $this->{$key}();

        } elseif ($this->modelHasPublicProperty($key)) {

            return $this->model->{$key};

        }
    }
}