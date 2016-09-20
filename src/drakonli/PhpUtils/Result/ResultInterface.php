<?php

namespace drakonli\PhpUtils\Result;

use drakonli\PhpUtils\Aware\Error\Message\ErrorMessagesAwareInterface;
use drakonli\PhpUtils\Aware\Status\StatusAwareInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface ResultInterface extends StatusAwareInterface, ErrorMessagesAwareInterface
{

}
