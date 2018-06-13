<?php
/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:39
 */

namespace Lazycao\Asset;


use Lazycao\Asset\Context\ContextInterface;
use Lazycao\Asset\VersionStrategy\VersionStrategyInterface;

class PathPackage extends Package
{
    private $basePath;

    function __construct(string $basePath, VersionStrategyInterface $versionStrategy, ContextInterface $context = null)
    {
        parent::__construct($versionStrategy,$context);
        if (!$basePath){
            $this->basePath = '/';
        }else{
            if ('/' !== $basePath[0]){
                $basePath = '/'.$basePath;
            }
            $this->basePath = rtrim($basePath,'/').'/';
        }


    }

    public function getUrl($path)
    {
        if ($this->isAbsoluteUrl($path)){
            return $path;
        }
        $versionedPath = $this->getVersionStrategy()->applyVersion($path);
        if ($this->isAbsoluteUrl($versionedPath) || ($versionedPath && '/' === $versionedPath[0])){
            return $versionedPath;
        }
        return $this->getBasePath().ltrim($versionedPath,'/');
    }
    public function getBasePath(){
        return $this->getContext()->getBasePath();
    }
}