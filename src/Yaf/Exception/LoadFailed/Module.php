<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22

 * @Class        :   \Yaf\Exception\LoadFailed\Module
 * @package      :   Yaf\Exception\LoadFailed
 */
namespace Yaf\Exception\LoadFailed;

use Yaf\Exception\LoadFailed;

/**
 * (Yaf >= 3.0.1)
 * 继承自Yaf_Exception_LoadFailed, 在找不到路由指定的模块时抛出
 *
 * Class Module
 * @package Yaf\Exception\LoadFailed
 */
class Module extends LoadFailed implements \Throwable
{
}