<?php

namespace drakonli\PhpUtils\Parameter\Bag\Basic;

use drakonli\PhpUtils\Parameter\Bag\Exception\ImmutableParameterBagNonExistentParamException;
use drakonli\PhpUtils\Parameter\Bag\ImmutableParameterBagInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
abstract class AbstractBasicImmutableParameterBag implements ImmutableParameterBagInterface
{
    /**
     * Parameter storage.
     *
     * @var array
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $parameters An array of parameters
     */
    public function __construct(array $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @inheritDoc
     */
    public function keys()
    {
        return array_keys($this->parameters);
    }

    /**
     * @inheritDoc
     */
    public function get($key)
    {
        if (false === array_key_exists($key, $this->parameters)) {
            throw new ImmutableParameterBagNonExistentParamException($key);
        }

        return $this->parameters[$key];
    }

    /**
     * @inheritDoc
     */
    public function has($key)
    {
        return array_key_exists($key, $this->parameters);
    }

    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->parameters);
    }

    /**
     * @inheritDoc
     */
    public function toArray()
    {
        return $this->parameters;
    }
}