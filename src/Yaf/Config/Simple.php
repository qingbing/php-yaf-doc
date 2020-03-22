<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Config\Simple
 * @package      :   Yaf\Config
 */

namespace Yaf\Config;

use Yaf\Config_Abstract;

/**
 * (Yaf >= 3.0.1)
 * 为存储在数组中的配置数据提供了适配器
 *
 * Class Simple
 * @package Yaf\Config
 */
final class Simple extends Config_Abstract implements \Iterator, \ArrayAccess, \Countable
{
    /**
     * (Yaf >= 3.0.1)
     * 构造方法
     *
     * @param string $config_file ini文件全路径
     * @param string $section 初始化时的配置节点名称
     */
    public function __construct($config_file, $section = null)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法 : 当isset()检测某个配置节点是否存在时调用
     *
     * @param string $name 节点名称
     *
     * @return bool
     */
    public function __isset($name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取配置节点的值，当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     *
     * @return Simple|Config_Abstract
     */
    public function get($name = null)
    {
        return new Simple('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置配置节点值
     *
     * @param string $name 变量名
     * @param mixed $value
     *
     * @return false
     */
    public function set($name, $value)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回节点的配置数量
     *
     * @return int
     */
    public function count()
    {
        return 0;
    }

    /**
     * (Yaf >= 3.0.1)
     * @deprecated 约定ini文件的配置不可写
     *
     * @param string $name 变量名
     *
     * @return void
     */
    public function offsetUnset($name)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 重置遍历位置
     *
     * @return void
     */
    public function rewind()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回当前节点
     *
     * @return mixed|Simple
     */
    public function current()
    {
        return new Simple('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 向前移动到下一个元素
     *
     * @return void
     */
    public function next()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 判断是否可以继续遍历
     *
     * @return void
     */
    public function valid()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 返回当前配置节点的key
     *
     * @return mixed
     */
    public function key()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 检测配置是否只读
     *
     * @return bool
     */
    public function readonly()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 将配置转换为数组
     *
     * @return array
     */
    public function toArray()
    {
        return [];
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置配置节点值
     *
     * @param string $name 变量名
     * @param mixed $value 变量值
     *
     * @return bool
     */
    public function __set($name, $value)
    {
        return false;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取配置节点的值，当不传递$name参数时，返回配置对象本身
     *
     * @param string $name 变量名
     *
     * @return Simple|mixed
     */
    public function __get($name = null)
    {
        return new Simple('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取配置节点的值，当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Ini
     */
    public function offsetGet($name)
    {
        return new Ini('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 检测某个配置节点是否存在
     *
     * @param mixed $name
     *
     * @return bool
     */
    public function offsetExists($name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置配置节点值
     *
     * @param string $name 节点名称
     * @param mixed $value 节点值
     */
    public function offsetSet($name, $value)
    {
    }
}