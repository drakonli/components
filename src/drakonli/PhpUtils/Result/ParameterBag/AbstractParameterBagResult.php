<?php

namespace drakonli\PhpUtils\Result\ParameterBag;

use drakonli\PhpUtils\Parameter\Bag\Basic\AbstractBasicImmutableParameterBag;
use drakonli\PhpUtils\Result\ResultInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
abstract class AbstractParameterBagResult extends AbstractBasicImmutableParameterBag implements ResultInterface
{
    const FIELD_ERROR_MESSAGES = 'error_messages';

    /**
     * @inheritDoc
     */
    public function getErrorMessages()
    {
        return $this->get(self::FIELD_ERROR_MESSAGES);
    }

    /**
     * @inheritDoc
     */
    public function isErrorResult()
    {
        return $this->has(self::FIELD_ERROR_MESSAGES);
    }
}
