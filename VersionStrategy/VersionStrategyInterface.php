<?php

/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:05
 */
namespace Lazycao\Asset\VersionStrategy;

interface VersionStrategyInterface
{
    /**
     * 返回资源版本
     * @param $path
     * @return mixed
     */
    public function getVersion($path);

    /**
     * 应用 版本到 资源上
     * @param $path
     * @return mixed
     */
    public function applyVersion($path);
}