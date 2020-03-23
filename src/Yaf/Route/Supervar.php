<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Route\Supervar
 * @package      :   Yaf\Route
 */

namespace Yaf\Route;

use Yaf\Request_Abstract;
use Yaf\Route_Interface;

/**
 * (Yaf >= 3.0.1)
 * Class Supervar
 *
 * 在query string中获取路由信息, 与Yaf_Route_Simple不同的是, 它获取的是一个类似包含整个路由信息的request_uri
 *
 * @package Yaf\Route
 */
final class Supervar implements Route_Interface
{
    /**
     * (Yaf >= 3.0.1)
     * 全局路由变量名
     *
     * @var String
     */
    protected $_var_name;

    /**
     * (Yaf >= 3.0.1)
     * 构造函数，在query string 中寻找路劲信息，参数 supervar_name 是建
     *
     * @param string $supervar_name
     */
    public function __construct($supervar_name)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 如果在$_GET中有键（在Yaf_Route_Supervar::__construct()中定义），返回TRUE，否则返回FALSE
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
     * 根据指定参数和自定义参数将supervar这个route组合成一个url
     *
     * @param array $info 需要传入一个数组，数组中每个key可为:m、:c、:a，:m代表module，:c代表controller, :a代表action
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     * @return string
     */
    public function assemble($info, $query = null)
    {
        return '';
    }
}