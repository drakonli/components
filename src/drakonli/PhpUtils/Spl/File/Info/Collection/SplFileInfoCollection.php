<?php

namespace drakonli\PhpUtils\Spl\File\Info\Collection;

use drakonli\PhpUtils\Collection\Immutable\Basic\AbstractBasicImmutableCollection;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 *
 * @method \SplFileInfo current
 */
class SplFileCollection extends AbstractBasicImmutableCollection
{
    /**
     * BasicSplFileInfoCollection constructor.
     *
     * @param array|\SplFileInfo[] $files
     */
    public function __construct(array $files)
    {
        parent::__construct($files);
    }
}
