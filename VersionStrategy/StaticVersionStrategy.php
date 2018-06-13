<?php
/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:09
 */

namespace Lazycao\Asset\VersionStrategy;


class StaticVersionStrategy implements VersionStrategyInterface
{
    private $version;
    private $format;
    function __construct(string $version, string $format = null)
    {
        $this->version = $version;
        $this->format = $format?:'%s?%s';

    }

    /**
     * 返回资源版本
     * @param $path
     * @return mixed
     */
    public function getVersion($path)
    {
        return $this->version;
    }

    /**
     * 应用 版本到 资源上
     * @param $path
     * @return mixed
     */
    public function applyVersion($path)
    {
        $versionized = sprintf($this->format,ltrim($path,'/'),$this->getVersion($path));
        if ($path && '/' == $path[0]) {
            return '/'.$versionized;
        }
        return $versionized;
    }
}