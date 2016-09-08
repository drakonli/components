<?php

namespace drakonli\PhpUtils\Collection\Immutable;

use Countable;
use Iterator;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ImmutableCollectionInterface extends Iterator, Countable
{
    /**
     * @return bool
     */
    public function isEmpty();

    /**
     * @return int
     */
    public function key();

    /**
     * @return array
     */
    public function toArray();
}