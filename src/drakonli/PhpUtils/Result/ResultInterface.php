<?php

namespace drakonli\PhpUtils\Result;

use drakonli\PhpUtils\Aware\Error\Message\ErrorMessagesAwareInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ResultInterface extends ErrorMessagesAwareInterface
{
    /**
     * @return bool
     */
    public function isErrorResult();
}
