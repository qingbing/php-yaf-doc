<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Request\Http
 * @package      :   Yaf\Request
 */

namespace Yaf\Request;

use Yaf\Request_Abstract;

/**
 * (Yaf >= 3.0.1)
 * Http请求, 一般的不用自己实例化它, Yaf_Application在run以后会自动根据当前请求实例它
 *
 * Class Http
 * @package Yaf\Request
 */
class Http extends Request_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * 构造方法
     *
     * @param string $request_uri Request URI（可选）
     * @param string $base_uri Base URI（可选）
     */
    public function __construct($request_uri = null, $base_uri = null)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取$_GET中名为$name的参数值
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function getQuery($name, $default = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取$_REQUEST中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getRequest($name = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取$_POST中名为$name的参数值
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function getPost($name, $default = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取$_COOKIE中名为$name的参数值
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function getCookie($name, $default = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 检索原始请求正文
     *
     * @return bool
     */
    public function getRaw()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取$_FILES中名为$name的参数值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function getFiles($name = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 从客户端返回变量，这个方法将从请求参数中寻找参数name，如果没有找到的话，将从POST, GET, Cookie, Server中寻找
     *
     * @param string $name 变量名
     * @param string $default 默认值
     *
     * @return mixed
     */
    public function get($name, $default = null)
    {
        return '';
    }
}