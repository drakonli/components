<?php

namespace drakonli\PhpUtils\Url\Basic;

use drakonli\PhpUtils\Url\UrlHelperInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class BasicUrlHelper implements UrlHelperInterface
{
    /**
     * @inheritDoc
     */
    function isUrlEncoded($string)
    {
        if (false === is_string($string)) {
            return false;
        }

        $hasInvalidChars = preg_match('#[^%a-zA-Z0-9\-_\.\+]#', $string);
        $hasEscapedChars = preg_match('#%[a-zA-Z0-9]{2}#', $string);

        return 1 !== $hasInvalidChars && 1 === $hasEscapedChars;
    }
}