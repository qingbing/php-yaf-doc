<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Registry
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * 对象注册表(或称对象仓库)是一个用于在整个应用空间(application space)内存储对象和值的容器.
 * 通过把对象存储在其中,我们可以在整个项目的任何地方使用同一个对象.这种机制相当于一种全局存储.
 * 我们可以通过Yaf_Registry类的静态方法来使用对象注册表.
 * 另外,由于该类是一个数组对象,你可以使用数组形式来访问其中的类方法
 *
 * Class Registry
 * @package Yaf
 */
final class Registry
{
    /**
     * (Yaf >= 3.0.1)
     * Registry实例（单例模式）
     *
     * @var Registry
     */
    static protected $_instance;
    /**
     * (Yaf >= 3.0.1)
     * 变量栈
     *
     * @var array
     */
    protected $_entries;

    /**
     * (Yaf >= 3.0.1)
     * 获取注册变量值
     *
     * @param string $name 变量名
     *
     * @return mixed
     */
    static public function get($name)
    {
        return '';
    }

    /**
     * (Yaf >= 2.2.9)
     * 魔术方法：构造函数
     */
    private function __construct()
    {
    }

    /**
     * (Yaf >= 2.2.9)
     * 魔术方法：构造函数，禁止使用 clone 函数
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 检测变量是否存在
     *
     * @param string $name 变量名
     *
     * @return bool
     */
    static public function has($name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 注册变量
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return bool
     */
    static public function set($name, $value)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 删除变量
     *
     * @param string $name
     *
     * @return bool
     */
    static public function del($name)
    {
        return true;
    }
}