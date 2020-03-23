<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Exception
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Yaf 异常处理基类
 *
 * Class Exception
 * @package Yaf
 */
class Exception extends \Exception implements \Throwable
{
    /**
     * (Yaf >= 3.0.1)
     * 异常发生文件
     *
     * @var String
     */
    protected $file;
    /**
     * (Yaf >= 3.0.1)
     * 异常发生文件行序列
     *
     * @var String
     */
    protected $line;
    /**
     * (Yaf >= 3.0.1)
     * 异常消息
     *
     * @var String
     */
    protected $message;

    /*
     * (Yaf >= 3.0.1)
     * 异常代码
     *
     * @var Int
     */
    protected $code;

    /**
     * (Yaf >= 3.0.1)
     * 上一个异常对象
     *
     * @var Exception
     */
    protected $previous;

    /**
     * (Yaf >= 3.0.1)
     * 异常构造函数
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 执行unserialize()时，先会调用这个函数
     */
    public function __wakeup()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 将异常对象转换为字符
     *
     * @return string
     * 返回转换为字符串（string）类型的异常
     */
    public function __toString()
    {
        return '';
    }
}