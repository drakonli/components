<?php

namespace drakonli\PhpUtils\Exception;

use Exception;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class NonStringPassedException extends Exception
{
    /**
     * NonStringPassedException constructor.
     *
     * @param mixed $argumentPassed
     */
    public function __construct($argumentPassed)
    {
        parent::__construct(
            sprintf('Not a string passed to a function/method: %s', print_r($argumentPassed, true))
        );
    }
}