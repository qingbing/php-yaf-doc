<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Plugin_Abstract
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Yaf_Plugin_Abstract是Yaf的插件基类, 所有应用在Yaf的插件都需要继承实现这个类, 这个类定义了7个方法, 依次在7个时机的时候被调用
 *
 * Class Plugin_Abstract
 * @package Yaf
 */
abstract class Plugin_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * 在路由之前触发，7个hook中最早触发，但是一起全局的自定义工作，还是应该放在Bootstrap中去实现
     *
     * @param Request_Abstract $request 当前请求对象
     * @param Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function routerStartup(Request_Abstract $request, Response_Abstract $response)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 路由结束之后触发，只有路由正确完成之后才会触发的hook
     *
     * @param Request_Abstract $request 当前请求对象
     * @param Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function routerShutdown(Request_Abstract $request, Response_Abstract $response)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 在分发循环开始之前触发
     *
     * @param Request_Abstract $request 当前请求对象
     * @param Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function dispatchLoopStartup(Request_Abstract $request, Response_Abstract $response)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 分发之前触发，如果在请求处理中发生了 forward，则这个事件会被多次触发
     *
     * @param Request_Abstract $request 当前请求对象
     * @param Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function preDispatch(Request_Abstract $request, Response_Abstract $response)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 分发结束之后触发，此时 action 已经结束，视图也已经渲染完成，和preDispatch，事件可能会被多次触发
     *
     * @param Request_Abstract $request 当前请求对象
     * @param Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function postDispatch(Request_Abstract $request, Response_Abstract $response)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 在分发循环结束之后触发，此时表示业务逻辑都已经运行完成，但是响应还没有发送
     *
     * @param Request_Abstract $request 当前请求对象
     * @param Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function dispatchLoopShutdown(Request_Abstract $request, Response_Abstract $response)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 这个hook在响应(Yaf_Response)前被触发
     *
     * @param Request_Abstract $request 当前请求对象
     * @param Response_Abstract $response 当前响应对象
     *
     * @return mixed
     */
    public function preResponse(Request_Abstract $request, Response_Abstract $response)
    {
        return '';
    }
}