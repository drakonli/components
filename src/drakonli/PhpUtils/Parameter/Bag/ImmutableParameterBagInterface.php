<?php

namespace drakonli\PhpUtils\Parameter\Bag;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ImmutableParameterBagInterface
{
    /**
     * Returns the parameter keys.
     *
     * @return array|string[] An array of parameter keys
     */
    public function keys();

    /**
     * Returns a parameter by name.
     *
     * @param string $key     The key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * Returns true if the parameter is defined.
     *
     * @param string $key The key
     *
     * @return \SplBool true if the parameter exists, false otherwise
     */
    public function has($key);

    /**
     * Returns the number of parameters.
     *
     * @return \SplInt The number of parameters
     */
    public function count();

    /**
     * @return array
     */
    public function toArray();
}