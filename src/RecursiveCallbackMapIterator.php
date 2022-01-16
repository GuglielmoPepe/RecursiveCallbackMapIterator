<?php 

declare(strict_types = 1);

namespace RecursiveCallbackMapIterator;

class RecursiveCallbackMapIterator extends \IteratorIterator implements \OuterIterator, \RecursiveIterator
{
    private $callback;

    public function __construct(\RecursiveIterator $iterator, callable $callback) {
        $this->callback = $callback;
        parent::__construct($iterator);
    }

    public function current()
    {
        if ($this->hasChildren())
        {
            return $this->getChildren();
        }

        return call_user_func(
            $this->callback,
            parent::current(),
            parent::key(),
            $this->getInnerIterator()
        );
    }

    public function getChildren()
    {
        return new static(parent::getChildren(), $this->callback);
    }

    public function hasChildren()
    {
        return parent::hasChildren();
    }
}

