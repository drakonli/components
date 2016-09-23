<?php

namespace drakonli\PhpUtils\Error\Message\ParameterBag;

use drakonli\PhpUtils\Error\Message\ErrorMessageInterface;
use drakonli\PhpUtils\Parameter\Bag\Basic\AbstractBasicImmutableParameterBag;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class ParameterBagErrorMessage extends AbstractBasicImmutableParameterBag implements ErrorMessageInterface
{
    const ERROR_MESSAGE = 'error_message';
    const ERROR_CODE = 'error_code';

    /**
     * @inheritDoc
     */
    public function getErrorMessage()
    {
        return $this->get(self::ERROR_MESSAGE);
    }

    /**
     * @inheritDoc
     */
    public function getErrorCode()
    {
        return $this->get(self::ERROR_CODE);
    }

    /**
     * @inheritDoc
     */
    public function hasErrorCode()
    {
        return $this->has(self::ERROR_CODE);
    }
}
