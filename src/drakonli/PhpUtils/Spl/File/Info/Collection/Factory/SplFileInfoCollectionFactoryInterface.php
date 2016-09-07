<?php

namespace drakonli\PhpUtils\Spl\File\Info\Collection\Factory;

use drakonli\PhpUtils\Spl\File\Info\Collection\SplFileInfoCollectionInterface;
use SplFileInfo;

/**
 * @author    drakonli - Arthur Vinogradov - <artur.drakonli@gmail.com>
 * @link      www.linkedin.com/in/drakonli
 */
interface SplFileInfoCollectionFactoryInterface
{
    /**
     * @param array|SplFileInfo[] $splFilesInfo
     *
     * @return SplFileInfoCollectionInterface
     */
    public function createSplFileCollection(array $splFilesInfo);
}