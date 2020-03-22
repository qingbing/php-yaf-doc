<?php
/**
 * @Extension    :   Yaf
 * @Link         :   http://www.phpcorner.net
 * @User         :   qingbing<780042175@qq.com>
 * @Version      :   3.1.0
 * @Date         :   2020-03-22
 * @Class        :   \Yaf\Action_Abstract
 * @package      :   Yaf
 */

namespace Yaf;
/**
 * (Yaf >= 3.0.1)
 * Yaf_Action_Abstract是MVC中C的动作, 一般而言动作都是定义在Yaf_Controller_Abstract的派生类中的
 * 但是有的时候, 为了使得代码清晰, 分离一些大的控制器, 则可以采用单独定义Yaf_Action_Abstract来实现.
 * Yaf_Action_Abstract体系具有可扩展性, 可以通过继承已有的类, 来实现这个抽象类, 从而添加应用自己的应用逻辑
 *
 * Class Action_Abstract
 * @package Yaf
 */
abstract class Action_Abstract extends Controller_Abstract
{
    /**
     * (Yaf >= 3.0.1)
     * 魔术方法：构造函数
     */
    final public function __construct()
    {
    }

    /**
     * (Yaf >= 3.0.1)
     * 动作入口，由Yaf框架自动调用
     *
     * @return mixed
     */
    abstract public function execute();

    /**
     * (Yaf >= 3.0.1)
     * 获取当前请求的控制器实例
     *
     * @return Controller_Abstract
     */
    public function getController()
    {
        return new class extends Controller_Abstract
        {
        };
    }
}