# php-yaf-doc
php-yaf，yaf框架编码提示api文档


## 使用说明
- yaf版本：3.0.1
- 提供 php-yaf 的各类的外部调用api
- 将该包加入到php-include文件或直接放入项目中，在编码中可以起到api提示信息的左右
- 该包仅仅是针对 php-yaf 扩展中各个类的调用定义，不进入项目编译等


## 使用方法
### 1、 方法一
```text
通过composer安装到项目上即可
composer require-dev qingbing/php-yaf-doc
```

### 2、 方法二
```text
用git工具clone到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

### 3、 方法三
```text
直接下载到本地，在编码时将该包加入到IDE的php-include路径，或直接放入项目中
```

## 参考链接
- [API-DOC] https://github.com/qingbing/php-yaf-doc
- [Download] http://pecl.php.net/package/yaf
- [Yaf cg-tools] https://github.com/laruence/yaf
- [DOC] https://www.php.net/manual/zh/book.yaf.php


## Class-List-Doc : 
- Yaf\Application
- Yaf\Bootstrap_Abstract
- Yaf\Dispatcher
- Yaf\Loader
- Yaf\Request_Abstract
- Yaf\Request\Http
- Yaf\Request\Simple
- Yaf\Response_Abstract
- Yaf\Response\Http
- Yaf\Response\Cli
- Yaf\Controller_Abstract
- Yaf\Action_Abstract
- Yaf\Config_Abstract
- Yaf\Config\Ini
- Yaf\Config\Simple
- Yaf\View\Simple
- Yaf\Router
- Yaf\Route_Static
- Yaf\Route\Simple
- Yaf\Route\Supervar
- Yaf\Route\Rewrite
- Yaf\Route\Regex
- Yaf\Route\Map
- Yaf\Plugin_Abstract
- Yaf\Registry
- Yaf\Session
- Yaf\Exception
- Yaf\Exception\StartupError
- Yaf\Exception\RouterFailed
- Yaf\Exception\DispatchFailed
- Yaf\Exception\LoadFailed
- Yaf\Exception\LoadFailed\Module
- Yaf\Exception\LoadFailed\Controller
- Yaf\Exception\LoadFailed\Action
- Yaf\Exception\LoadFailed\View
- Yaf\Exception\TypeError



## Interface-List-Doc : 
- Yaf\View_Interface
- Yaf\Route_Interface