<?php

namespace drakonli\PhpUtils\Encoding\Converter\Basic;

use drakonli\PhpUtils\Encoding\Converter\EncodingConverterInterface;
use drakonli\PhpUtils\Exception\NonStringPassedException;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class BasicEncodingConverter implements EncodingConverterInterface
{
    /**
     * @inheritDoc
     */
    public function convertStringEncoding($string, $fromEncoding, $toEncoding)
    {
        if (false === is_string($string)) {
            throw new NonStringPassedException($string);
        }

        if ($fromEncoding === $toEncoding) {
            return $string;
        }

        $convertedString = @iconv($fromEncoding, $toEncoding.'//IGNORE', $string);

        if (true === empty($convertedString) && extension_loaded('mbstring')) {
            $convertedString = @mb_convert_encoding($string, $toEncoding, $fromEncoding);
        }

        return true === empty($convertedString) ? $string : $convertedString;
    }
}