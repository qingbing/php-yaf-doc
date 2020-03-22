<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Session
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Yaf对Session的包装
 *
 * Class Session
 * @package Yaf
 */
final class Session implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * (Yaf >= 3.0.1)
     * 单例模式 ： 获取Session实例
     *
     * @return Session
     */
    static public function getInstance()
    {
        return new Session();
    }

    /**
     * 构造方法
     */
    private function __construct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 开启 Session 会话
     *
     * @return Session
     */
    public function start()
    {
        return new Session();
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取 session 变量
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    public function get($name)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取 session 变量
     *
     * @param string $name 变量名
     *
     * @return bool
     */
    public function has($name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置 session 变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Session
     */
    public function set($name, $value)
    {
        return new Session();
    }

    /**
     * (Yaf >= 3.0.1)
     * 删除 session 变量
     *
     * @param string $name 变量名
     *
     * @return Session
     */
    public function del($name)
    {
        return new Session();
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回 session 的个数
     *
     * @return int
     */
    public function count()
    {
        return 0;
    }

    /**
     * (Yaf >= 3.0.1)
     * 重置 session 的遍历位置
     */
    public function rewind()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 向前移动到下一个元素
     */
    public function next()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回当前变量
     *
     * @return mixed|string
     */
    public function current()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回当前变量的key
     *
     * @return mixed|string
     */
    public function key()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 判断是否可继续遍历
     *
     * @return bool
     */
    public function valid()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 清空 session
     *
     * @return bool
     */
    public function clear()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取 session 变量
     *
     * @param string $name 变量名
     *
     * @return mixed|void
     */
    public function offsetGet($name)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置 session 变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Session
     */
    public function offsetSet($name, $value)
    {
        return new Session();
    }

    /**
     * (Yaf >= 3.0.1)
     * 判断一个 session 变量是否存在
     *
     * @param string $name 变量名
     *
     * @return bool
     */
    public function offsetExists($name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 删除一个 session 变量
     *
     * @param string $name 变量名
     *
     * @return Session
     */
    public function offsetUnset($name)
    {
        return new Session();
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取一个 session 变量
     *
     * @param string $name 变量名
     *
     * @return string
     */
    public function __get($name)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法 : 用 isset() 检测session变量是否存在时调用
     *
     * @param string $name 变量名
     *
     * @return bool
     */
    public function __isset($name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法 : 设置一个 session 变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return Session
     */
    public function __set($name, $value)
    {
        return new Session();
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法 : 删除一个 session 变量，用 unset() 作用时调用
     *
     * @param string $name 变量名
     *
     * @return Session
     */
    public function __unset($name)
    {
        return new Session();
    }
}