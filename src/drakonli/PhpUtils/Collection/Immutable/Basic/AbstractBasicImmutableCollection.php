<?php

namespace drakonli\PhpUtils\Collection\Immutable\Basic;

use drakonli\PhpUtils\Collection\Immutable\ImmutableCollectionInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
abstract class AbstractBasicImmutableCollection implements ImmutableCollectionInterface
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