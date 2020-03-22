<?php
/**
 * Link         :   http://www.phpcorner.net
 * User         :   qingbing<780042175@qq.com>
 * Extension    :   Yaf
 * Version      :   3.1.0
 * Date         :   2020-03-22
 */

// Yaf框架的三位版本信息
defined('\YAF\VERSION') or define('\YAF\VERSION', "3.1.0");

// Yaf的环境常量, 指明了要读取的配置的节, 默认的是product
defined('\YAF\ENVIRON') or define('\YAF\ENVIRON', "product");

// Yaf的错误代码常量, 表示启动失败
defined('\YAF\ERR\STARTUP_FAILED') or define('\YAF\ERR\STARTUP_FAILED', 512);

// Yaf的错误代码常量, 表示路由失败
defined('\YAF\ERR\ROUTE_FAILED') or define('\YAF\ERR\ROUTE_FAILED', 513);

// Yaf的错误代码常量, 表示分发失败
defined('\YAF\ERR\DISPATCH_FAILED') or define('\YAF\ERR\DISPATCH_FAILED', 514);

// Yaf的错误代码常量, 表示自动加载类失败
defined('\YAF\ERR\AUTOLOAD_FAILED') or define('\YAF\ERR\AUTOLOAD_FAILED', 520);

// Yaf的错误代码常量, 表示找不到指定的模块
defined('\YAF\ERR\NOTFOUND\MODULE') or define('\YAF\ERR\NOTFOUND\MODULE', 515);

// Yaf的错误代码常量, 表示找不到指定的Controller
defined('\YAF\ERR\NOTFOUND\CONTROLLER') or define('\YAF\ERR\NOTFOUND\CONTROLLER', 516);

// Yaf的错误代码常量, 表示找不到指定的Action
defined('\YAF\ERR\NOTFOUND\ACTION') or define('\YAF\ERR\NOTFOUND\ACTION', 517);

// Yaf的错误代码常量, 表示找不到指定的视图文件
defined('\YAF\ERR\NOTFOUND\VIEW') or define('\YAF\ERR\NOTFOUND\VIEW', 518);

// Yaf的错误代码常量, 表示调用失败
defined('\YAF\ERR\CALL_FAILED') or define('\YAF\ERR\CALL_FAILED', 519);

// Yaf的错误代码常量, 表示关键逻辑的参数错误
defined('\YAF\ERR\TYPE_ERROR') or define('\YAF\ERR\TYPE_ERROR', 521);
