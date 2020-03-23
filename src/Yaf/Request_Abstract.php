<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Request_Abstract
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * 请求处理类，代表了一个实际请求, 一般的不用自己实例化它, Yaf_Application在run以后会自动根据当前请求实例它
 *
 * Class Request_Abstract
 * @package Yaf
 */
abstract class Request_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * http 请求模式
     */
    const SCHEME_HTTP = 'http';
    /**
     * (Yaf >= 3.0.1)
     * https 请求模式
     */
    const SCHEME_HTTPS = 'https';

    /**
     * (Yaf >= 3.0.1)
     * 在路由完成后, 请求被分配到的模块名
     *
     * @var string
     */
    public $module = '???';
    /**
     * (Yaf >= 3.0.1)
     * 路由完成后, 请求被分配到的模块名
     *
     * @var string
     */
    public $controller = '???';
    /**
     * (Yaf >= 3.0.1)
     * 在路由完成后, 请求被分配到的操作名
     *
     * @var string
     */
    public $action = '???';
    /**
     * (Yaf >= 3.0.1)
     * 当前请求的Method, 对于命令行来说, Method为"CLI"
     *
     * @var string
     */
    public $method = '???';

    /**
     * (Yaf >= 3.0.1)
     * 请求传递的参数
     *
     * @var array
     */
    protected $params;
    /**
     * (Yaf >= 3.0.1)
     * http报头中 HTTP_ACCEPT_LANGUAGE 的值
     *
     * @var string
     */
    protected $language;
    /**
     * (Yaf >= 3.0.1)
     * 异常对象
     *
     * @var \Exception
     */
    protected $_exception;
    /**
     * (Yaf >= 3.0.1)
     * 请求的Base URI（http请求 or cli模式下）
     *
     * @var string
     */
    protected $_base_uri;
    /**
     * (Yaf >= 3.0.1)
     * 请求的URI（http请求）
     *
     * @var string
     */
    protected $uri;
    /**
     * (Yaf >= 3.0.1)
     * 请求是否完成了分发，默认为0
     *
     * @var bool
     */
    protected $dispatched;
    /**
     * (Yaf >= 3.0.1)
     * 请求是否完成了路由，默认为0
     *
     * @var bool
     */
    protected $routed;

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为GET请求
     *
     * @return bool
     */
    public function isGet()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为POST请求
     *
     * @return bool
     */
    public function isPost()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为DELETE请求
     *
     * @return bool
     */
    public function isDelete()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为PATCH请求
     *
     * @return bool
     */
    public function isPatch()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为PUT请求
     *
     * @return bool
     */
    public function isPut()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为HEAD请求
     *
     * @return bool
     */
    public function isHead()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为OPTION请求
     *
     * @return bool
     */
    public function isOptions()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为CLI请求
     *
     * @return bool
     */
    public function isCli()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求是否为XmlHttp请求
     *
     * @return bool
     */
    public function isXmlHttpRequest()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回SERVER变量的值
     *
     * @param string $name 变量名
     * @param mixed $default 如果提供这个参数，在没找到变量值时候此参数的值将被返回
     *
     * @return string
     */
    public function getServer($name, $default = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 取得ENV变量的值
     *
     * @param string $name 变量名
     * @param mixed $default 如果这个参数被提供了，当参数找不到的时候它将被返回
     *
     * @return mixed
     */
    public function getEnv($name, $default = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 为当前的请求,设置路由参数
     *
     * @param string $name
     * @param mixed $value
     *
     * @return bool
     */
    public function setParam($name, $value = null)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求中的路由参数, 路由参数不是指$_GET或者$_POST, 而是在路由过程中, 路由协议根据Request Uri分析出的请求参数
     *
     * @param string $name 要获取的路由参数名
     * @param mixed $default 如果设定此参数, 如果没有找到$name路由参数, 则返回此参数值.
     *
     * @return string 找到返回对应的路由参数值, 如果没有找到, 而又设置了$default_value, 则返回default_value, 否则返回NULL.
     */
    public function getParam($name, $default = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求中的所有路由参数, 路由参数不是指$_GET或者$_POST, 而是在路由过程中, 路由协议根据Request Uri分析出的请求参数
     *  eg : 对于默认的路由协议Yaf_Route_Static
     *      URL: http://www.domain.com/module/controller/action/name1/value1/name2/value2/
     *      路由结束后将会得到俩个路由参数, name1和name2, 值分别是value1, value2.
     *
     * @return array
     */
    public function getParams()
    {
        return [];
    }

    /**
     * (Yaf >= 3.0.1)
     * 在异常捕获模式下, 在异常发生的情况时流程进入Error控制器的error动作时, 获取当前发生的异常对象
     *
     * @return \Exception|null 在有异常的情况下, 返回当前异常对象. 没有异常的情况下, 返回NULL
     */
    public function getException()
    {
        return new \Exception('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求被路由到的模块名.
     *
     * @return string|null 路由成功以后, 返回当前被分发处理此次请求的模块名. 路由之前, 返回NULL
     */
    public function getModuleName()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求被路由到的控制器名
     *
     * @return string|null 路由成功以后, 返回当前被分发处理此次请求的控制器名. 路由之前, 返回NULL
     */
    public function getControllerName()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求被路由到的动作(Action)名
     *
     * @return string|null 路由成功以后, 返回当前被分发处理此次请求的动作名. 路由之前, 返回NULL
     */
    public function getActionName()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置模块名
     *
     * @param string $module 模块名
     *
     * @return bool
     */
    public function setModuleName($module)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置控制器名
     *
     * @param string $controller 控制器名
     *
     * @return bool
     */
    public function setControllerName($controller)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置操作名
     *
     * @param string $action 操作名
     *
     * @return bool
     */
    public function setActionName($action)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求的类型, 可能的返回值为GET,POST,HEAD,PUT,CLI等
     *
     * @return string
     */
    public function getMethod()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求的语言
     *
     * @return string
     */
    public function getLanguage()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置请求的Base URI
     *
     * @param string $uri
     *
     * @return $this
     */
    public function setBaseUri($uri)
    {
        return $this;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取请求的Base URI
     *
     * @return string
     */
    public function getBaseUri()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取请求的uri
     *
     * @return string
     */
    public function getRequestUri()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * @param string $uri
     * 设置请求的uri
     *
     * @return $this
     */
    public function setRequestUri($uri)
    {
        return $this;
    }

    /**
     * (Yaf >= 3.0.1)
     * 判断请求是否完成了分发
     *
     * @return bool
     */
    public function isDispatched()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置请求已经完成分发
     *
     * @param $dispatched
     *
     * @return bool
     */
    public function setDispatched($dispatched)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 判断请求是否完成了路由
     *
     * @return bool
     */
    public function isRouted()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置请求已经完成了路由
     *
     * @param bool $flag
     * @return bool
     */
    public function setRouted($flag)
    {
        return true;
    }
}