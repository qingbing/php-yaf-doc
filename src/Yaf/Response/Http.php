<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Response\Http
 * @package      :   Yaf\Response
 */

namespace Yaf\Response;

use Yaf\Response_Abstract;

/**
 * (Yaf >= 3.0.1)
 * Yaf_Response_Http是在Yaf作为Web应用的时候默认响应载体
 *
 * Class Http
 * @package Yaf\Response
 */
class Http extends Response_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * 设置响应报头
     * @deprecated 总是返回null
     *
     * @return null
     */
    public function setHeader($name, $value, $rep = null, $response_code = null)
    {
        return null;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取所有响应报头
     * @deprecated 总是返回false
     *
     * @param array $headers
     *
     * @return bool
     */
    public function setAllHeaders($headers)
    {
        return false;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取响应报头
     * @deprecated 总是返回null
     *
     * @param string $name
     *
     * @return null
     */
    public function getHeader($name = null)
    {
        return null;
    }

    /**
     * (Yaf >= 3.0.1)
     * 清空响应报头
     * @deprecated 总是返回false
     *
     * @return bool
     */
    public function clearHeaders()
    {
        return false;
    }

    /**
     * (Yaf >= 3.0.1)
     * 将当前请求重定向到指定的URL（内部实现是通过发送Location报头实现，如：header("Location:http//www.phpcroner.net/"））
     *
     * @param string $url 重定向的绝对URL
     *
     * @return bool
     */
    public function setRedirect($url)
    {
        return true;
    }
}