<?php

namespace drakonli\PhpUtils\Type;

use InvalidArgumentException;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class ResourceType
{
    /**
     * @var resource
     */
    private $resourceValue;

    /**
     * ResourceType constructor.
     *
     * @param mixed $resourceValue
     */
    public function __construct($resourceValue)
    {
        if (false === is_resource($resourceValue)) {
            throw new InvalidArgumentException('ResourceType cannot be created from %s', $resourceValue);
        }

        $this->resourceValue = $resourceValue;
    }

    /**
     * @return resource
     */
    public function getValue()
    {
        return $this->resourceValue;
    }
}
