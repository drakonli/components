<?php

namespace drakonli\PhpUtils\Spl\File\Info\Collection;

use drakonli\PhpUtils\Collection\Immutable\ImmutableCollectionInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface SplFileInfoCollectionInterface extends ImmutableCollectionInterface
{
    /**
     * @return \SplFileInfo
     */
    public function current();
}