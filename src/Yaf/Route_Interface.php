<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Route_Interface
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Interface Route_Interface
 *
 * Yaf路由协议的标准接口, 它的存在使得用户可以自定义路由协议
 *
 * @package Yaf
 */
interface Route_Interface
{
    /**
     * (Yaf >= 3.0.1)
     * 路由一个请求, 本方法不需要主动调用, Yaf_Dispatcher::dispatch会自动调用本方法
     *
     * @param Request_Abstract $request
     *
     * @return bool
     */
    public function route(Request_Abstract $request);

    /**
     * (Yaf >= 3.0.1)
     * 将指定路由规则组合成一个url
     *
     * @param array $info
     * @param array $query
     * @return string
     */
    public function assemble($info, $query = null);
}