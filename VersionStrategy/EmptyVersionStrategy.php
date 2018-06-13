<?php
/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:08
 */

namespace Lazycao\Asset\VersionStrategy;


class EmptyVersionStrategy implements VersionStrategyInterface
{

    /**
     * 返回资源版本
     * @param $path
     * @return mixed
     */
    public function getVersion($path)
    {
        return '';
    }

    /**
     * 应用 版本到 资源上
     * @param $path
     * @return mixed
     */
    public function applyVersion($path)
    {
        return $path;
    }
}