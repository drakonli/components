<?php

namespace drakonli\PhpUtils\Type;

use InvalidArgumentException;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class StringType
{
    /**
     * @var string
     */
    private $stringValue;

    /**
     * stringType constructor.
     *
     * @param mixed $stringValue
     */
    public function __construct($stringValue)
    {
        if (false === is_string($stringValue)) {
            throw new InvalidArgumentException('StringType cannot be created from %s', print_r($stringValue, true));
        }

        $this->stringValue = $stringValue;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->stringValue;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->stringValue;
    }
}
