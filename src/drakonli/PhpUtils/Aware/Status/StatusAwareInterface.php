<?php

namespace drakonli\PhpUtils\Aware\Status;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface StatusAwareInterface
{
    /**
     * @return bool
     */
    public function getStatus();
}
