<?php

namespace drakonli\PhpUtils\Result;

use drakonli\PhpUtils\Aware\Error\Message\Collection\ErrorMessageCollectionAwareInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ResultInterface extends ErrorMessageCollectionAwareInterface
{
    /**
     * @return bool
     */
    public function isErrorResult();
}
