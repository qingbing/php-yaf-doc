<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Exception\RouterFailed
 * @package      :   Yaf\Exception
 */

namespace Yaf\Exception;

use Yaf\Exception;

/**
 * (Yaf >= 3.0.1)
 * 继承自Yaf_Exception,在路由失败的时候抛出
 *
 * Class RouterFailed
 * @package Yaf\Exception
 */
class RouterFailed extends Exception implements \Throwable
{
}