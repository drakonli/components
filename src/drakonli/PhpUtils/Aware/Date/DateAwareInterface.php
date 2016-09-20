<?php

namespace drakonli\PhpUtils\Aware\Date;

use DateTime;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface DateAwareInterface
{
    /**
     * @return DateTime
     */
    public function getDate();
}
