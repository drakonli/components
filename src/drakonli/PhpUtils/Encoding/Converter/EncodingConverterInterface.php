<?php

namespace drakonli\PhpUtils\Encoding\Converter;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface EncodingConverterInterface
{
    /**
     * @param string $string
     * @param string $fromEncoding
     * @param string $toEncoding
     *
     * @return string
     */
    public function convertStringEncoding($string, $fromEncoding, $toEncoding);
}