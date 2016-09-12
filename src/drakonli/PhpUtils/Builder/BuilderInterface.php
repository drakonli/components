<?php

namespace drakonli\PhpUtils\Builder;

/**
 * Tagging service
 *
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface BuilderInterface
{
    /**
     * Using this method is essential to keeping the state of builder properly separated from all it's instances
     * and uses.
     *
     * @return static
     */
    public function startBuilding();
}
