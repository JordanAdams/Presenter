<?php namespace JordanAdams\Presenter;

trait PresentableTrait
{
    protected $presenterInstance;

    /**
     * Returns model presenter
     *
     * @return mixed
     */
    public function presenter()
    {
        if (!isset($this->presenter)) {
            throw new \InvalidArgumentException('Presenter property not found in '.get_class($this));
        }

        if (!$this->presenterInstance) {
            $this->presenterInstance = new $this->presenter($this);
        }

        return new $this->presenter($this);
    }
}