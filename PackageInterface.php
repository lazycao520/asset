<?php

/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:00
 */
namespace Lazycao\Asset;
interface PackageInterface
{

    /**
     * 返回 资源版本号
     * @param $path
     * @return mixed
     */
    public function getVersion($path);

    /**
     * 返回资源路径
     * @param $path
     * @return mixed
     */
    public function getUrl($path);
}