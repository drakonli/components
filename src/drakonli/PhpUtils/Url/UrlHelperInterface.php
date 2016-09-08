<?php

namespace drakonli\PhpUtils\Url;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface UrlHelperInterface
{
    /**
     * @param string $string
     *
     * @return bool
     */
    function isUrlEncoded($string);
}