<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Config_Abstract
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * Yaf_Config_Abstract被设计在应用程序中简化访问和使用配置数据,它为在应用程序代码中访问这样的配置数据提供了一个基于用户接口的嵌入式对象属性。
 * 配置数据可能来自于各种支持等级结构数据存储的媒体。 Yaf_Config_Abstract实现了Countable, ArrayAccess 和 Iterator 接口。
 * 这样，可以基于Yaf_Config_Abstract对象使用count()函数和PHP语句如foreach, 也可以通过数组方式访问Yaf_Config_Abstract的元素。
 * Yaf_Config_INI为存储在Ini文件的配置数据提供了适配器。 Yaf_Config_Simple为存储在PHP的数组中的配置数据提供了适配器。
 *
 * Class Config_Abstract
 * @package Yaf
 */
abstract class Config_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * 存储已解析的配置
     *
     * @var array
     */
    protected $_config;
    /**
     * (Yaf >= 3.0.1)
     * 配置是否只读，默认为true
     *
     * @var bool
     */
    protected $_readonly;

    /**
     * (Yaf >= 3.0.1)
     * 获取配置节点的值
     * 当不传递$name参数时，返回配置对象本身
     *
     * @param string $name
     * @return Config_Abstract|mixed
     */
    abstract public function get($name);

    /**
     * (Yaf >= 3.0.1)
     * 设置配置节点的值
     *
     * @param string $name
     * @param mixed $value
     *
     * @return bool
     */
    abstract public function set($name, $value);

    /**
     * (Yaf >= 3.0.1)
     * 返回配置只读的状态
     *
     * @return bool
     */
    abstract public function readonly();

    /**
     * (Yaf >= 3.0.1)
     * 将配置转换为数组
     *
     * @return array
     */
    abstract public function toArray();
}

