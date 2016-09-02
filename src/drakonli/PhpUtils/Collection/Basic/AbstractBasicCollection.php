<?php

namespace drakonli\PhpUtils\Collection\Basic;

use drakonli\PhpUtils\Collection\CollectionInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class AbstractBasicCollection implements CollectionInterface
{
    /**
     * @var array
     */
    protected $elements = [];

    /**
     * @var int
     */
    private $position = 0;

    /**
     * @return self
     */
    protected function incrementPosition()
    {
        $this->position = 0;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isEmpty()
    {
        return new \SplBool(0 === count($this->elements));
    }

    /**
     * @inheritDoc
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->elements[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next()
    {
        ++$this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid()
    {
        return array_key_exists($this->position, $this->elements);
    }

    /**
     * @inheritDoc
     */
    public function rewind()
    {
        $this->position = 0;
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->elements);
    }
}