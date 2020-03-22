<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Response_Abstract
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 *
 * Class Response_Abstract
 * @package Yaf
 */
abstract class Response_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * 默认响应正文实体名
     *
     * @var string
     */
    const DEFAULT_BODY = 'content';

    /**
     * (Yaf >= 3.0.1)
     * 构造方法
     */
    public function __construct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 析构方法
     */
    public function __destruct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回响应正文的字符串
     *
     * @return string
     */
    public function __toString()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置响应的Body, $name参数是保留参数, 目前没有特殊效果, 留空即可
     *
     * @param string $body 要响应的字符串, 一般是一段HTML, 或者是一段JSON(返回给Ajax请求)
     * @param string $name 要响应的字符串的key, 一般的你可以通过指定不同的key, 给一个response对象设置很多响应字符串, 可以在所有的请求结束后做layout, 如果你不做特殊处理, 交给Yaf去发送响应的话, 所有你设置的响应字符串, 按照被设置的先后顺序被输出给客户端.
     *
     * @return bool 成功返回Yaf_Response_Abstract, 失败返回FALSE
     */
    public function setBody($body, $name = 'content')
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 往已有的响应body后附加新的内容, $name参数是保留参数, 目前没有特殊效果, 留空即可
     *
     * @param string $body 要附加的字符串, 一般是一段HTML, 或者是一段JSON(返回给Ajax请求)
     * @param string $name 保留参数, 目前没有特殊效果
     *
     * @return bool 成功返回Yaf_Response_Abstract, 失败返回FALSE
     */
    public function appendBody($body, $name = 'content')
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 往已有的响应body前插入新的内容, $name参数是保留参数, 目前没有特殊效果, 留空即可
     *
     * @param string $body 要插入的字符串, 一般是一段HTML, 或者是一段JSON(返回给Ajax请求)
     * @param string $name 保留参数, 目前没有特殊效果
     *
     * @return bool 成功返回Yaf_Response_Abstract, 失败返回FALSE
     */
    public function prependBody($body, $name = 'content')
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 清除已经设置的响应body
     *
     * @param string $name 保留参数, 目前没有特殊效果
     *
     * @return bool 成功返回Yaf_Response_Abstract, 失败返回FALSE
     */
    public function clearBody($name = 'content')
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取已经设置的响应body
     *
     * @param string $name 保留参数, 目前没有特殊效果
     *
     * @return string 成功返回已设置的body值, 失败返回NULL
     */
    public function getBody($name = 'content')
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 发送响应给请求端
     *
     * @return bool 成功返回TRUE, 失败返回FALSE
     */
    public function response()
    {
        return true;
    }
}