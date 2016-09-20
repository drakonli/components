<?php

namespace drakonli\PhpUtils\Aware\Error\Message;

use drakonli\PhpUtils\Error\Message\Collection\ErrorMessageCollectionInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ErrorMessagesAwareInterface
{
    /**
     * @return ErrorMessageCollectionInterface
     */
    public function getErrorMessages();
}
