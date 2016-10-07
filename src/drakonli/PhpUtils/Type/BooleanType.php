<?php

namespace drakonli\PhpUtils\Type;

use InvalidArgumentException;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class BooleanType
{
    const TO_STRING_TRUE = 'true';
    const TO_STRING_FALSE = 'false';

    /**
     * @var array
     */
    private $boolToString = [
        true => self::TO_STRING_TRUE,
        false => self::TO_STRING_FALSE
    ];

    /**
     * @var bool
     */
    private $booleanValue;

    /**
     * BooleanType constructor.
     *
     * @param mixed $booleanValue
     */
    public function __construct($booleanValue)
    {
        if (false === is_bool($booleanValue)) {
            throw new InvalidArgumentException('BooleanType cannot be created from %s', $booleanValue);
        }

        $this->booleanValue = $booleanValue;
    }

    /**
     * @return bool
     */
    public function getValue()
    {
        return $this->booleanValue;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->boolToString[$this->booleanValue];
    }
}
