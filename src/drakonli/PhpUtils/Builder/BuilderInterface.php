<?php

namespace drakonli\PhpUtils\Builder;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface BuilderInterface
{
    /**
     * Resets built object to start building again from scratch
     *
     * @return static
     */
    public function reset();
}
