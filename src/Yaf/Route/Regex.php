<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Route\Regex
 * @package      :   Yaf\Route
 */

namespace Yaf\Route;

use Yaf\Request_Abstract;
use Yaf\Route_Interface;

/**
 * (Yaf >= 3.0.1)
 * 正则路由(Yaf_Route_Regex)有点复杂，但比其他路由协议要灵活
 *
 * Class Regex
 * @package Yaf\Route
 */
final class Regex implements Route_Interface
{
    /**
     * (Yaf >= 3.0.1)
     * 路由匹配正则表达式
     *
     * @var string
     */
    protected $_route;
    /**
     * (Yaf >= 3.0.1)
     * 默认路由信息
     *
     * 如：array('module' => 'index', 'controller' => 'index', 'action' => 'index')
     *
     * @var array
     */
    protected $_default;
    /**
     * (Yaf >= 3.0.1)
     * 模式分组的映射关系
     *
     * 如：array('1' => 'name', '2' => 'age')
     *
     * @var array
     */
    protected $_maps;
    /**
     * (Yaf >= 3.0.1)
     *
     * @var array
     */
    protected $_verify;
    /**
     * (Yaf >= 3.0.1)
     *
     * @var array
     */
    protected $_reverse;

    /**
     * (Yaf >= 3.0.1)
     * 构造函数
     *
     * @param string $match 一个完整的正则表达式，用来匹配一个请求的uri，如果不能匹配，Yaf_Route_Regex 将返回FALSE
     * @param array $route 当路由正则匹配成功请求uri时，Yaf_Route_Regex将会用它来决定哪一个m/c/a被路由
     *      在这个数组中无论是m/c/a都是最优的，如果你没有提供一个明确的值，它将会以默认方式被路由。 另外, 你也可以使用map的结果作为m/c/a的结果
     * @param array $map 将匹配到的结果捕捉放到一个已经命名好的数组中
     * @param array $verify
     * @param null $reverse
     */
    public function __construct($match, $route, $map = null, $verify = null, $reverse = null)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 根据指定参数和自定义参数将regex这个route组合成一个url
     *      注意：在regex route使用assemble需要在初始化时指定reverse参数，否则将不能正常工作
     *
     * @param array $info 需要传入一个数组，数组的key可以为:a、:c、:m，:a表示action，:c表示controller，:m表示module
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     *
     * @return string
     */
    public function assemble($info, $query = null)
    {
        return '';
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
}