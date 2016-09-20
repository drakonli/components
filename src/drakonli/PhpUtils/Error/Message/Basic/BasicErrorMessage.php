<?php

namespace drakonli\PhpUtils\Error\Message\Basic;

use drakonli\PhpUtils\Error\Message\ErrorMessageInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class BasicErrorMessage implements ErrorMessageInterface
{
    /**
     * @var string
     */
    private $errorMessage;

    /**
     * BasicErrorMessage constructor.
     *
     * @param string $errorMessage
     */
    public function __construct($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * @inheritDoc
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }
}
