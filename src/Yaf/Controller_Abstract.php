<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Controller_Abstract
 * @package      :   Yaf
 */

namespace Yaf;

/**
 * (Yaf >= 3.0.1)
 * Yaf_Controller_Abstract是Yaf的MVC体系的核心部分. MVC是指Model-View-Controller, 是一个用于分离应用逻辑和表现逻辑的设计模式.
 * Yaf_Controller_Abstract体系具有可扩展性, 可以通过继承已有的类, 来实现这个抽象类, 从而添加应用自己的应用逻辑.
 * 对于Controller来说, 真正的执行体是在Controller中定义的一个一个的动作, 当然这些动作也可以定义在Controller外:参看Yaf_Controller_Abstract::$action
 * 与一般的框架不同, 在Yaf中, 可以定义动作的参数, 这些参数的值来自对Request的路由结果中的同名参数值
 *
 * Class Controller_Abstract
 * @package Yaf
 */
abstract class Controller_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * 动作名与动作类文件路径映射数组
     *
     * eg：
     * public $actions = array(
     *      'user' => "actions/article/index/User.php",
     * );
     *
     * 备注：有些时候为了拆分比较大的Controller, 使得代码更加清晰和易于管理, Yaf支持将具体的动作分开定义.
     * 每个动作都需要实现Yaf\Action_Abstract就可以通过定义Yaf\Controller_Abstract::$actions来指明
     * 那些动作对应于具体的那些分离的类.
     *
     * @var array
     */
    public $actions = [];
    /**
     * (Yaf >= 3.0.1)
     * 当前请求的模块名
     *
     * @var String
     */
    protected $_module;

    /**
     * (Yaf >= 3.0.1)
     * 当前请求的控制器名
     *
     * @var String
     */
    protected $_name;

    /**
     * (Yaf >= 3.0.1)
     * 当前请求对象，包括请求的所有相关信息
     *
     * @var Request_Abstract
     */
    protected $_request;

    /**
     * (Yaf >= 3.0.1)
     * 当前响应对象，保存响应的所有相关信息
     *
     * @var Response_Abstract
     */
    protected $_response;

    /**
     * (Yaf >= 3.0.1)
     * 储存调用参数
     *
     * @var array
     */
    protected $_invoke_args;

    /**
     * (Yaf >= 3.0.1)
     * 视图对象
     *
     * @var View_Interface
     */
    protected $_view;

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法：构造函数
     */
    final private function __construct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 渲染动作对应的模板，并返回结果
     *
     * @param string $action_name 动作名
     * @param array $var_array 传递到视图对象的参数
     *
     * @return String
     */
    protected function render($action_name, $var_array = array())
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 渲染动作对应的模板，并直接输出结果
     *
     * @param string $action_name 动作名
     * @param array $var_array 传递到视图对象的参数
     *
     * @return String
     */
    protected function display($action_name, $var_array = array())
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的请求实例
     *
     * @return Request_Abstract
     */
    public function getRequest()
    {
        return new Request\Simple();
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的响应实例
     *
     * @return Response_Abstract
     */
    public function getResponse()
    {
        return new Response\Cli();
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前控制器所属的模块名
     *
     * @return string 成功返回模块名,失败返回NULL
     */
    public function getModuleName()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的视图引擎
     *
     * @return View_Interface
     */
    public function getView()
    {
        return new View\Simple('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 初始化视图引擎, 因为Yaf采用延迟实例化视图引擎的策略, 所以只有在使用前调用此方法, 视图引擎才会被实例化
     *
     * @return View_Interface
     */
    public function initView($options = null)
    {
        return new View\Simple('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 更改视图模板目录, 之后Yaf_Controller_Abstract::render就会在整个目录下寻找模板文件
     *
     * @param string $view_directory 视图模板目录, 绝对目录
     *
     * @return Controller_Abstract | false 成功返回Yaf_Controller_Abstract, 失败返回FALSE
     */
    public function setViewPath($view_directory)
    {
        return new class extends Controller_Abstract
        {
        };
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的模板目录
     *
     * @return string 成功返回模板目录,失败返回NULL
     */
    public function getViewPath()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 将当前的请求转交给另外的Action（对用户来说是透明的，相当于Web服务器的代理）.
     *
     * 调用Yaf\Controller_Abstract::forward()以后，不会直接立即跳转到目的Action执行，
     * 而是会在当前的Action执行完成后，下一轮的DispatchLoop中，交给目的Action.
     * 所以, 如果你希望立即跳转到目的Action, 那么请使用return结束当前的执行流程.
     *
     * @param string $module 模块名
     * @param string $controller 控制器名
     * @param string $action 操作名
     * @param array $parameters 关联数组
     *
     * @return bool
     */
    public function forward($module, $controller = null, $action = null, $parameters = null)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 重定向请求到新的路径
     *
     * @param string $url
     *
     * @return Controller_Abstract
     */
    public function redirect($url)
    {
        return new class extends Controller_Abstract
        {
        };
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取全部调用参数
     *
     * @return array
     */
    public function getInvokeArgs()
    {
        return [];
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取指定调用参数名的值
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getInvokeArg($name)
    {
        return '';
    }
}