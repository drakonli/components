<?php

namespace drakonli\PhpUtils\Error\Message\Collection;

use drakonli\PhpUtils\Collection\Immutable\ImmutableCollectionInterface;
use drakonli\PhpUtils\Error\Message\ErrorMessageInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ErrorMessageCollectionInterface extends ImmutableCollectionInterface
{
    /**
     * @return ErrorMessageInterface
     */
    public function current();
}
