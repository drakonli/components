<?php

namespace drakonli\PhpUtils\Aware\Error\Message;

use drakonli\PhpUtils\Error\Message\ErrorMessageInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ErrorMessageAwareInterface
{
    /**
     * @return ErrorMessageInterface
     */
    public function getErrorMessage();
}
