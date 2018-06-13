<?php
/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:27
 */

namespace Lazycao\Asset;


use Lazycao\Asset\Context\ContextInterface;
use Lazycao\Asset\VersionStrategy\VersionStrategyInterface;

class Package implements PackageInterface
{
    private $versionStrategy;
    private $context;

    function __construct(VersionStrategyInterface $versionStrategy ,ContextInterface $context = null)
    {
     $this->versionStrategy = $versionStrategy;
     $this->context = $context;
    }

    /**
     * 返回 资源版本号
     * @param $path
     * @return mixed
     */
    public function getVersion($path)
    {
        $this->versionStrategy->getVersion($path);
    }

    /**
     * 返回资源路径
     * @param $path
     * @return mixed
     */
    public function getUrl($path)
    {
        if ($this->isAbsoluteUrl($path)){
            return $path;
        }
        return $this->versionStrategy->applyVersion($path);
    }

    protected function getContext(){
        return $this->context;
    }
    protected function getVersionStrategy(){
        return $this->versionStrategy;
    }

    protected function isAbsoluteUrl($url){
        return false !== strpos($url,'://') || '//' == substr($url,0,2);
    }
}