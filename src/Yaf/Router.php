<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Router
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Yaf的路由器, 负责分析请求中的request uri, 得出目标模块（module）, 控制器（controller）, 动作（action）
 *
 * Class Router
 * @package Yaf
 */
final class Router
{
    /**
     * (Yaf >= 3.0.1)
     *
     * 魔术方法：构造函数
     * Router constructor.
     */
    public function __construct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 给路由器增加一个名为$name的路由协议
     *
     * @param string $name 要增加的路由协议的名字
     * @param Route_Interface $route 要增加的路由协议, Yaf_Route_Interface的一个实例
     *
     * @return Router 成功返回Yaf_Router, 失败返回FALSE, 并抛出异常(或者触发错误)
     */
    public function addRoute($name, Route_Interface $route)
    {
        return new Router();
    }

    /**
     * (Yaf >= 3.0.1)
     * 向Router中添加配置文件或者配置数组定义的路由
     *
     * @param array $config | Config_Abstract
     *
     * @return Router
     */
    public function addConfig($config)
    {
        return new Router();
    }

    /**
     * (Yaf >= 3.0.1)
     * 路由请求, 本方法不需要主动调用, Yaf_Dispatcher::dispatch会自动调用本方法
     *
     * @param Request_Abstract $request Request_Abstract实例
     *
     * @return bool 成功返回TRUE, 失败返回FALSE
     */
    public function route(Request_Abstract $request)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前路由器的路由协议栈中名为$name的协议
     *
     * @param string $name 要获取的协议名
     *
     * @return Route_Interface 成功返回目的路由协议, 失败返回NULL
     */
    public function getRoute($name)
    {
        return new Route_Static();
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前路由器中已注册的所有路由协议
     *
     * @return array
     */
    public function getRoutes()
    {
        return [];
    }

    /**
     * (Yaf >= 3.0.1)
     * 在路由结束以后, 获取路由匹配成功, 路由生效的路由协议名
     *
     * @return Route_Static|null 成功返回生效的路由协议名, 失败返回NULL
     */
    public function getCurrentRoute()
    {
        return new Route_Static();
    }
}