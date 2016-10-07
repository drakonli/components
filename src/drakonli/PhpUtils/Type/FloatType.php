<?php

namespace drakonli\PhpUtils\Type;

use InvalidArgumentException;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class FloatType
{
    /**
     * @var float
     */
    private $floatValue;

    /**
     * FloatType constructor.
     *
     * @param mixed $floatValue
     */
    public function __construct($floatValue)
    {
        if (false === is_float($floatValue)) {
            throw new InvalidArgumentException('FloatType cannot be created from %s', $floatValue);
        }

        $this->floatValue = $floatValue;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->floatValue;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->floatValue;
    }
}
