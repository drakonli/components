<?php

namespace drakonli\PhpUtils\Parameter\Bag\Exception;

use Exception;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class ImmutableParameterBagNonExistentParamException extends Exception
{
    /**
     * ImmutableParameterBagNonExistentParamException constructor.
     *
     * @param string $paramName
     */
    public function __construct($paramName)
    {
        parent::__construct(
            sprintf('Parameter named "%s" does not exist in given parameter bag', $paramName)
        );
    }
}