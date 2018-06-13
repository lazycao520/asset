<?php
/**
 * Created by PhpStorm.
 * User: lazycao
 * Date: 2018/6/13 0013
 * Time: 16:29
 */

namespace Lazycao\Asset\Context;


class NullContext implements ContextInterface
{

    public function getBasePath()
    {
        return '';
    }

    public function isSecure()
    {
        return false;
    }
}