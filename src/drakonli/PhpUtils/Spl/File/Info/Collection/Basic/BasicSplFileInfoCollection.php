<?php

namespace drakonli\PhpUtils\Spl\File\Info\Collection\Basic;

use drakonli\PhpUtils\Collection\Immutable\Basic\AbstractBasicImmutableCollection;
use drakonli\PhpUtils\Spl\File\Info\Collection\SplFileInfoCollectionInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class BasicSplFileInfoCollection extends AbstractBasicImmutableCollection implements SplFileInfoCollectionInterface
{
    /**
     * BasicSplFileInfoCollection constructor.
     *
     * @param array|\SplFileInfo[] $files
     */
    public function __construct(array $files)
    {
        $this->elements = $files;
    }
}