<?php

namespace drakonli\PhpUtils\Collection;

use Iterator;
use Countable;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface CollectionInterface extends Iterator, Countable
{
    /**
     * @return \SplBool
     */
    public function isEmpty();

    /**
     * @return int
     */
    public function key();
}