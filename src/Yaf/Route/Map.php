<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Route\Map
 * @package      :   Yaf\Route
 */

namespace Yaf\Route;

use Yaf\Request_Abstract;
use Yaf\Route_Interface;

/**
 * (Yaf >= 3.0.1)
 * Yaf_Route_Map议是一种简单的路由协议, 它将REQUEST_URI中以'/'分割的节, 组合在一起, 形成一个分层的控制器或者动作的路由结果
 *
 * 对于请求request_uri为"/ap/foo/bar"，base_uri为"/ap"，则最后参加路由的request_uri为"/foo/bar"
 * 然后, 通过对URL分段, 得到如下分节 foo, bar，组合在一起以后, 得到路由结果foo_bar
 * 然后根据在构造Yaf_Route_Map的时候, 是否指明了控制器优先，如果没有, 则把结果当做是动作的路由结果，否则, 则认为是控制器的路由结果
 * 默认的, 控制器优先为FALSE
 *
 * Class Map
 * @package Yaf\Route
 */
final class Map implements Route_Interface
{
    /**
     * (Yaf >= 3.0.1)
     * 表示路由结果是作为动作的路由结果，还是控制器的路由结果，默认的是动作路由结果.
     *
     * @var int
     */
    protected $_ctl_router = 0;
    /**
     * (Yaf >= 3.0.1)
     * 分隔符
     *
     * @var string
     */
    protected $_delimiter;

    /**
     * (Yaf >= 3.0.1)
     * Map 构造函数
     *
     * @param bool $controller_prefer 路由结果是作为动作的路由结果,还是控制器的路由结果. 默认的是动作路由结果
     * @param string $delimiter 分隔符, 如果设置了这个分隔符, 那么在REQUEST_URI中, 分隔符之前的作为路由信息载体, 而之后的作为请求参
     */
    public function __construct($controller_prefer = false, $delimiter = null)
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
     * 根据指定参数和自定义参数将map这个route组合成一个url
     *
     * @param array $info 需要传入一个数组，数组的key可以为:a或者:c，:a表示action，:c表示controller
     *      当map route初始化时，controller_prefer为false时，这个参数需要传入:c。当controller_prefer 为true时，这个参数需要传入:a。
     * @param array $query 用户自定义的query string，将根据此路由规则拼接在url中
     *
     * @return string
     */
    public function assemble($info, $query = null)
    {
        return '';
    }
}