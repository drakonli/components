<?php

namespace drakonli\PhpUtils\Error\Message;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ErrorMessageInterface
{
    /**
     * @return string
     */
    public function getErrorMessage();

    /**
     * @return int
     */
    public function getErrorCode();

    /**
     * @return bool
     */
    public function hasErrorCode();
}
