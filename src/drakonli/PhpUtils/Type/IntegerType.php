<?php

namespace drakonli\PhpUtils\Type;

use InvalidArgumentException;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class IntegerType
{
    /**
     * @var int
     */
    private $integerValue;

    /**
     * IntegerType constructor.
     *
     * @param mixed $integerValue
     */
    public function __construct($integerValue)
    {
        if (false === is_integer($integerValue)) {
            throw new InvalidArgumentException('IntegerType cannot be created from %s', print_r($integerValue, true));
        }

        $this->integerValue = $integerValue;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->integerValue;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->integerValue;
    }
}
