<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Route\Simple
 * @package      :   Yaf\Route
 */

namespace Yaf\Route;

use Yaf\Request_Abstract;
use Yaf\Route_Interface;

/**
 * (Yaf >= 3.0.1)
 * Class Simple
 *
 * Yaf_Route_Simple 会匹配请求中的query string，然后找到路由信息
 * 你需要做的只是告诉 Yaf_Route_Simple，在$_GET中哪个是Module，哪个是Controller，哪个是Action
 * Yaf_Route_Simple::route() 总是会返回TRUE，所以把Yaf_Route_Simple放在路由堆栈前面是很重要的，否则其他所有的路由都可能不会被调用到
 *
 * @package Yaf\Route
 */
final class Simple implements Route_Interface
{
    /**
     * (Yaf >= 3.0.1)
     * Yaf_Route_Simple将从query string中获得路由信息。这个构造函数的参数会被作为键到$_GET中去寻找路由信息
     *
     * @param string $module_name
     * @param string $controller_name
     * @param string $action_name
     */
    public function __construct($module_name, $controller_name, $action_name)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 路由一个请求, 本方法不需要主动调用, Yaf_Dispatcher::dispatch会自动调用本方法
     *
     * @param Request_Abstract $request
     *
     * @return bool
     */
    public function route(Request_Abstract $request)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 根据指定参数和自定义参数将simple这个route组合成一个url
     *
     * @param array $info
     * @param array $query
     * @return string
     */
    public function assemble($info, $query = null)
    {
        return '';
    }
}