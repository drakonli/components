<?php

namespace drakonli\PhpUtils\Spl\File\Info\Collection\Factory\Basic;

use drakonli\PhpUtils\Spl\File\Info\Collection\Basic\BasicSplFileInfoCollection;
use drakonli\PhpUtils\Spl\File\Info\Collection\Factory\SplFileInfoCollectionFactoryInterface;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
class BasicSplFileInfoCollectionFactory implements SplFileInfoCollectionFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createSplFileCollection(array $splFilesInfo)
    {
        return new BasicSplFileInfoCollection($splFilesInfo);
    }
}