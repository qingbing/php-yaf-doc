<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\View_Interface
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Interface View_Interface
 *
 * 提供可扩展的, 可自定的视图引擎而设立的视图引擎接口, 它定义了用在Yaf上的视图引擎需要实现的方法和功能
 *
 * @package Yaf
 */
interface View_Interface
{
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
    public function assign($name, $value = null);

    /**
     * (Yaf >= 3.0.1)
     * 渲染一个视图模板, 并直接输出给请求端
     *
     * @param string $tpl 视图模板的文件, 绝对路径, 一般这个路径由Yaf_Controller_Abstract提供
     * @param array $tpl_vars 关联数组, 模板变量
     *
     * @return bool|string
     */
    public function display($tpl, $tpl_vars = null);

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
    public function render($tpl, $tpl_vars = null);

    /**
     * (Yaf >= 3.0.1)
     * 设置模板的基目录, 默认的Yaf_Dispatcher会设置此目录为APPLICATION_PATH . "/views".
     *
     * @param string $template_dir 视图模板的基目录, 绝对地址
     *
     * @return bool
     * 成功返回TRUE, 失败返回FALSE
     */
    public function setScriptPath($template_dir);

    /**
     * (Yaf >= 3.0.1)
     * 获取当前的模板目录
     *
     * @return string
     */
    public function getScriptPath();
}