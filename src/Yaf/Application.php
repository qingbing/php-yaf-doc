<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Application
 * @package      :   Yaf
 */

namespace Yaf;

use Yaf\Config\Ini;

/**
 * (Yaf >= 3.0.1)
 * Yaf应用类，代表一个产品/项目, 是Yaf运行的主导者, 真正执行的主题. 它负责接收请求, 协调路由, 分发, 执行, 输出
 *
 * Class Application
 * @package Yaf
 */
final class Application
{
    /**
     * (Yaf >= 3.0.1)
     * 获取当前的Application实例
     *
     * @return Application
     */
    static public function app()
    {
        return new Application('');
    }

    /**
     * (Yaf >= 3.0.1)
     * Application 构造器，初始化一个Application应用, 如果$config是一个INI文件, 那么$environ指明要读取的配置节
     *
     * @param mixed $config 关联数组的配置, 或者一个指向ini格式的配置文件的路径的字符串, 或者是一个Yaf_Config_Abstract实例
     *      如果是一个ini配置文件，那配置文件中应该有一个定义了yaf.environ 的配置节.这个在生产环境中是默认的.
     *      如果你使用了ini配置文件作为你应用配置的容器，你需要打开yaf.cache_config 来提升性能.
     * @param string $environ 加载的配置节点，使用该节点的配置初始化应用
     */
    public function __construct($config, $environ = 'product')
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 运行 Yaf Application
     *
     * @return bool
     */
    public function run()
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 运行一个用户自定义函数过程. 主要用在使用Yaf做简单的命令行脚本的时候, 应用Yaf的外围环境, 比如:自动加载, 配置, 视图引擎等
     * 运行回调函数，一般在命令行模式下运行.
     *
     * @param callable $entry 回调函数, 方法可以通过array($obj, "method_name")来定义
     * @param mixed $parameters 零个或者多个要传递给函数的参数
     * @return mixed 被调用函数或者方法的返回值
     */
    public function execute(callable $entry, $parameters)
    {
        return call_user_func_array($entry, $parameters);
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前 Application 的环境名，定义在yaf.environ，默认值为"product"
     *
     * @return string
     */
    public function environ()
    {
        return \YAf\ENVIRON;
    }

    /**
     * (Yaf >= 3.0.1)
     * 指示Yaf_Application去寻找Bootstrap，并按照声明的顺序，执行所有在Bootstrap类中定义的以_init开头的方法。
     * 如果没有提供变量bootstrap，Yaf默认会去application.directory中寻找Bootstrap
     *
     * @param Bootstrap_Abstract|null $bootstrap
     * @return Application
     */
    public function bootstrap(Bootstrap_Abstract $bootstrap = null)
    {
        return new Application('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取Yaf_Application读取的配置项
     *
     * @return Config_Abstract
     */
    public function getConfig()
    {
        return new Ini('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取在配置文件中声明的模块，如果没有声明，它的默认值将是"Index".
     *
     * @return string
     */
    public function getModules()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的分发器
     *
     * @return Dispatcher
     */
    public function getDispatcher()
    {
        return Dispatcher::getInstance();
    }

    /**
     * (Yaf >= 3.0.1)
     * 改变当前应用的主目录
     *
     * @param string $directory
     *
     * @return Application
     */
    public function setAppDirectory($directory)
    {
        return new Application('');
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前应用的主目录
     *
     * @return string|Application
     */
    public function getAppDirectory()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取最近产生的错误代码
     *
     * @return int
     */
    public function getLastErrorNo()
    {
        return 0;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取最近产生的错误信息
     *
     * @return string
     */
    public function getLastErrorMsg()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 清除最后的错误信息, 将设置$this->_err_no=0,$this->_err_msg=''.
     *
     * @return Application
     */
    public function clearLastError()
    {
        return new Application('');
    }

    /**
     * (Yaf >= 3.0.1)
     *
     * 魔术方法：析构函数
     */
    public function __destruct()
    {
    }
}