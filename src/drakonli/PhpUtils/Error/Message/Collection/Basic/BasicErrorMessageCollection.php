<?php

namespace drakonli\PhpUtils\Error\Message\Collection\Basic;

use drakonli\PhpUtils\Collection\Immutable\Basic\AbstractBasicImmutableCollection;
use drakonli\PhpUtils\Error\Message\Collection\ErrorMessageCollectionInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class BasicErrorMessageCollection extends AbstractBasicImmutableCollection implements ErrorMessageCollectionInterface
{
    /**
     * BasicErrorMessageCollection constructor.
     *
     * @param array|string[] $errorMessages
     */
    public function __construct(array $errorMessages)
    {
        parent::__construct($errorMessages);
    }
}
