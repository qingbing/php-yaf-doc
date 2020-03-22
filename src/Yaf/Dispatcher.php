<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Dispatcher
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Yaf_Dispatcher实现了MVC中的C分发, 它由Yaf_Application负责初始化, 然后由Yaf_Application::run启动
 * 它协调路由来的请求, 并分发和执行发现的动作, 并收集动作产生的响应, 输出响应给请求者, 并在整个过程完成以后返回响应
 *
 * Class Dispatcher
 * @package Yaf
 */
final class Dispatcher
{
    /**
     * (Yaf >= 3.0.1)
     * 魔术方法：构造函数
     */
    private function __construct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前应用的 Dispatcher实例
     *
     * @return Dispatcher
     */
    static public function getInstance()
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 开启自动渲染模板. 默认是开启的, 在动作执行完成以后, Yaf会自动render以动作名命名的视图模板文件
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function enableView()
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 关闭自动渲染模板， 默认是开启的, 在动作执行完成以后, Yaf会自动render以动作名命名的视图模板文件
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function disableView()
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 初始化视图引擎, 因为Yaf采用延迟实例化视图引擎的策略, 所以只有在使用前调用此方法, 视图引擎才会被实例化
     *
     * @param string $templates_dir 视图的模板目录的绝对路径
     * @param mixed $options
     * @return View_Interface
     */
    public function initView($templates_dir, $options = null)
    {
        return new View\Simple('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置视图引擎
     *
     * @param View_Interface $view 一个实现了Yaf_View_Interface的视图引擎实例
     *
     * @return Dispatcher 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function setView(View_Interface $view)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置请求对象（在命令行或者其他API模式下构造请求很有用）
     *
     * @param Request_Abstract $request 一个Yaf_Request_Abstract实例
     *
     * @return Dispatcher 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function setRequest(Request_Abstract $request)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的Yaf 应用
     *
     * @return Application
     */
    public function getApplication()
    {
        return new Application('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回路由器实例
     *
     * @return Router
     */
    public function getRouter()
    {
        return new Router();
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
     * 设置错误处理函数, 一般在appcation.throwException关闭的情况下, Yaf会在出错的时候触发错误, 这个时候, 如果设置了错误处理函数, 则会把控制交给错误处理函数处理.
     *
     * @param callable $callback 错误处理函数, 这个函数需要最少接受俩个参数: 错误代码($error_code)和错误信息($error_message), 可选的还可以接受三个参数: 错误文件($err_file), 错误行($err_line)和错误上下文($errcontext)
     * @param int $error_types 要捕获的错误类型
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function setErrorHandler(callable $callback, $error_types = E_ALL | E_STRICT)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置路由的默认模块, 如果在路由结果中不包含模块信息, 则会使用此默认模块作为路由模块结果
     *
     * @param string $module 默认模块名, 请注意需要首字母大写
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function setDefaultModule($module)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置路由的默认控制器, 如果在路由结果中不包含控制器信息, 则会使用此默认控制器作为路由控制器结果
     *
     * @param string $controller 默认控制器名, 请注意需要首字母大写
     *
     * @return Dispatcher|false|mixed 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function setDefaultController($controller)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置路由的默认动作, 如果在路由结果中不包含动作信息, 则会使用此默认动作作为路由动作结果
     *
     * @param string $action 默认动作名, 请注意需要全部小写
     *
     * @return Dispatcher|false|mixed 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function setDefaultAction($action)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 是否返回Response对象, 如果启用, 则Response对象在分发完成以后不会自动输出给请求端, 而是交给程序员自己控制输出
     *      设置或者返回$this->_return_response属性的值
     *      当传递$flag参数时，设置$this->_return_response=$flag，并返回Dispatcher
     *      当不传递任何参数时，返回$this->_return_response当前值
     *
     * @param bool $flag
     *
     * @return Dispatcher|false|mixed 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function returnResponse($flag)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 开启/关闭自动渲染功能. 在开启的情况下(Yaf默认开启), Action执行完成以后, Yaf会自动调用View引擎去渲染该Action对应的视图模板.
     *
     * @param bool $flag
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function autoRender($flag)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 切换自动响应. 在Yaf_Dispatcher::enableView()的情况下, 会使得Yaf_Dispatcher调用Yaf_Controller_Abstract::display方法, 直接输出响应给请求端
     *
     * @param bool $flag
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function flushInstantly($flag)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 开始处理流程, 一般的不需要用户调用此方法, Yaf_Application::run 会自动调用此方法
     *
     * @param Request_Abstract $request 一个 Request_Abstract 实例
     *
     * @return Response_Abstract
     */
    public function dispatch(Request_Abstract $request)
    {
        return new Response\Cli();
    }

    /**
     * (Yaf >= 3.0.1)
     * 切换在Yaf出错的时候抛出异常, 还是触发错误.
     * 当然,也可以在配置文件中使用 ap.dispatcher.thorwException=$flag 达到同样的效果, 默认的是开启状态.
     *
     * @param bool $flag 如果为TRUE,则Yaf在出错的时候采用抛出异常的方式. 如果为FALSE, 则Yaf在出错的时候采用触发错误的方式
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function throwException($flag = null)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 在ap.dispatcher.throwException开启的状态下, 是否启用默认捕获异常机制
     * 当然,也可以在配置文件中使用ap.dispatcher.catchException=$flag 达到同样的效果, 默认的是开启状态
     *
     * @param bool $flag 如果为TRUE, 则在有未捕获异常的时候, Yaf会交给Error Controller的Error Action处理
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function catchException($flag = null)
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 注册一个插件
     *
     * @param Plugin_Abstract $plugin 一个Yaf_Plugin_Abstract派生类的实例
     *
     * @return Dispatcher|false 成功返回Yaf_Dispatcher, 失败返回FALSE
     */
    public function registerPlugin(Plugin_Abstract $plugin)
    {
        return Dispatcher::getInstance();
    }
}