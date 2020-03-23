<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Loader
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 *
 * Class Loader
 * @package Yaf
 */
final class Loader
{
    /**
     * (Yaf >= 3.0.1)
     * 当前应用本地类库目录
     *
     * @var String
     */
    protected $_library;
    /**
     * (Yaf >= 3.0.1)
     * 全局类库目录
     *
     * @var String
     */
    protected $_global_library;

    /**
     * (Yaf >= 3.0.1)
     * 当前Loader实例（单例模式）
     *
     * @var Loader
     */
    static protected $_instance;

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的Yaf_Loader实例
     *
     * @param string $local_library_path 本地(自身)类库目录, 如果留空, 则返回已经实例化过的Yaf_Loader实例
     * @param string $global_library_path 全局类库目录, 如果留空则会认为和$local_library_directory相同.
     *
     * @return Loader
     */
    static public function getInstance($local_library_path = null, $global_library_path = null)
    {
        if (null === self::$_instance) {
            self::$_instance = new Loader();
        }
        return self::$_instance;
    }

    /**
     * (Yaf >= 3.0.1)
     * 手动导入文件 :  因为Yaf_Loader::import只是专注于一次包含, 所以要比传统的require_once性能好一些
     *
     * @param string $file 要载入的文件路径, 可以为绝对路径和相对路径. 如果为相对路径, 则会以应用的本地类目录(ap.library)为基目录
     *
     * @return bool
     */
    static public function import($file)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法：构造函数
     */
    private function __construct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法：private 禁止使用 clone 函数
     */
    private function __clone()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法：private 禁止使用 serialize 函数
     */
    private function __sleep()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法：private 禁止使用 unserialize 函数
     */
    private function __wakeup()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 载入一个类, 这个方法被Yaf用作自动加载类的方法, 当然也可以手动调用
     * 在php.ini中的yaf.use_spl_autoload关闭的情况下, 即使类没有找到, Yaf_Loader::autoload也会返回TRUE, 剥夺其后面的自动加载函数的执行权利
     *
     * @param string $class_name 要载入的类名, 类名必须包含路径信息, 也就是下划线分隔的路径信息和类名.
     *      载入的过程中, 首先会判断这个类名是否是本地类,
     *      如果是本地类, 则使用本地类类库目录,
     *      否则使用全局类目录. 然后判断yaf.lowcase_path是否开启, 如果开启, 则会把类名中的路径部分全部小写. 然后加载, 执行
     *
     * @return bool
     */
    public function autoload($class_name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 注册本地类前缀, 是的对于以这些前缀开头的本地类, 都从本地类库路径中加载
     *
     * @param mixed $name_prefix 字符串或者是数组格式的类名前缀, 不包含前缀后面的下划线
     *
     * @return Loader
     */
    public function registerLocalNamespace($name_prefix)
    {
        return self::$_instance;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前已经注册的本地类前缀
     *
     * @return string
     */
    public function getLocalNamespace()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 清除已注册的本地类前缀
     *
     * @return bool
     */
    public function clearLocalNamespace()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 判断一个类, 是否是本地类
     *
     * @param string $class_name 字符串的类名, 本方法会根据下划线分隔截取出类名的第一部分, 然后在Yaf_Loader的_local_ns中判断是否存在, 从而确定结果
     *
     * @return bool
     */
    public function isLocalName($class_name)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置类库目录
     *
     * @param string $library_path 目录路径
     * @param bool $is_global 是否为全局类库
     *
     * @return bool
     */
    public function setLibraryPath($library_path, $is_global = null)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取类库目录
     *
     * @param bool $is_global 是否为全局类库
     *
     * @return string
     */
    public function getLibraryPath($is_global = null)
    {
        return '';
    }
}