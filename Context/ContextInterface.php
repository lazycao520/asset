<?php

/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:28
 */
namespace Lazycao\Asset\Context;
interface ContextInterface
{
    public function getBasePath();
    public function isSecure();
}