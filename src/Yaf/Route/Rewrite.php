<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Route\Rewrite
 * @package      :   Yaf\Route
 */

namespace Yaf\Route;

use Yaf\Request_Abstract;
use Yaf\Route_Interface;

/**
 * (Yaf >= 3.0.1)
 * Yaf_Route_Rewrite是一个强大的路由协议, 它能满足我们绝大部分的路由需求
 *
 * Class Rewrite
 * @package Yaf\Route
 */
final class Rewrite implements Route_Interface
{
    /**
     * (Yaf >= 3.0.1)
     * 构造函数
     *
     * @param string $match 一个类似正则表达式，会被用来匹配一个请求的uri，如果匹配失败，Yaf_Route_Rewrite 会返回FALSE
     * @param array $route 当路由正则匹配成功请求uri时，Yaf_Route_Rewrite 将会用它来决定哪一个m/c/a被路由
     *      在这个数组中无论是m/c/a都是最优的，如果你没有提供一个明确的值，它将会以默认方式被路由
     * @param null $verify
     */
    public function __construct($match, $route, $verify = null)
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
     * 根据指定参数和自定义参数将rewrite这个route组合成一个url
     *
     * @param array $info 需要传入一个数组，数组中每个key必须和初始化rewrite route时$match参数中的带冒号的参数名一致
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     * @return string
     */
    public function assemble($info, $query = null)
    {
        return '';
    }
}