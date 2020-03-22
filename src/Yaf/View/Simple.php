<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\View\Simple
 * @package      :   Yaf\View
 */

namespace Yaf\View;

use Yaf\View_Interface;


/**
 * (Yaf >= 3.0.1)
 * Yaf自带的视图引擎, 它追求性能, 所以没有复杂的语法
 *
 * Class Simple
 * @package Yaf\View
 */
class Simple implements View_Interface
{
    /**
     * (Yaf >= 3.0.1)
     * 构造方法，初始化Simple对象
     *
     * @param string $template_dir 模版文件目录
     * @param array $options
     */
    final public function __construct($template_dir, $options = null)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取视图引擎的一个模板变量值
     *
     * @param string $name 模板变量名
     *
     * @return mixed
     * 成功返回变量值,失败返回NULL
     */
    public function get($name = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 为视图引擎分配一个模板变量, 在视图模板中可以直接通过${$name}获取模板变量值
     *
     * @param string|array $name 字符串或者关联数组, 如果为字符串, 则$value不能为空, 此字符串代表要分配的变量名. 如果为数组, 则$value须为空, 此参数为变量名和值的关联数组
     * @param string $value 分配的模板变量值
     *
     * @return bool
     * 成功返回Yaf_View_Simple, 失败返回 false
     */
    public function assign($name, $value = null)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 渲染一个视图模板, 得到结果
     *
     * @param string $tpl 视图模板的文件, 绝对路径, 一般这个路径由Yaf_Controller_Abstract提供
     * @param mixed $tpl_vars 关联数组, 模板变量
     *
     * @return string
     * 成功返回视图模板执行结果. 失败返回NULL
     */
    public function render($tpl, $tpl_vars = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 渲染一个字符串模板，然后返回结果
     *
     * @param string $tpl_str
     * @param mixed $vars
     */
    public function eval($tpl_str, array $vars = null)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 渲染一个视图模板, 并直接输出给请求端
     *
     * @param string $tpl 视图模板的文件, 绝对路径, 一般这个路径由Yaf_Controller_Abstract提供
     * @param array $tpl_vars 关联数组, 模板变量
     *
     * @return bool|string
     */
    public function display($tpl, $tpl_vars = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 传递一个引用变量给模板引擎
     *
     * @param string $name
     * @param mixed $value
     */
    public function assignRef($name, $value)
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 清除指定的变量或全部变量
     *
     * @param mixed $name
     *
     * @return bool
     */
    public function clear($name = null)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 设置模板的基目录, 默认的Yaf_Dispatcher会设置此目录为APPLICATION_PATH . "/views".
     *
     * @param string $template_dir 视图模板的基目录, 绝对地址
     *
     * @return bool
     * 成功返回TRUE, 失败返回FALSE
     */
    public function setScriptPath($template_dir)
    {
        return true;
    }

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的模板目录
     *
     * @return string
     */
    public function getScriptPath()
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 魔术方法，当isset检测某个属性是否存在时自动调用（判断是否传递某个模板变量）
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
     * 获取视图引擎的一个模板变量值
     *
     * @param string $name 模板变量名
     *
     * @return string
     * 成功返回变量值,失败返回NULL
     */
    public function __get($name = null)
    {
        return '';
    }

    /**
     * (Yaf >= 3.0.1)
     * 为视图引擎分配一个模板变量, 在视图模板中可以直接通过${$name}获取模板变量值
     *
     * @param mixed $name 字符串或者关联数组, 如果为字符串, 则$value不能为空, 此字符串代表要分配的变量名. 如果为数组, 则$value须为空, 此参数为变量名和值的关联数组.
     * @param mixed $value 分配的模板变量值
     *
     * @return bool
     * 成功返回Yaf_View_Simple, 失败返回FALSE
     */
    public function __set($name, $value = null)
    {
        return true;
    }
}