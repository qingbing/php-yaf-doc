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
- [DOC] https://www.laruence.com/manual/

## php.ini Yaf 全局配置选项
- yaf.environ[product] : PHP_INI_ALL,环境名称, 当用INI作为Yaf的配置文件时, 这个指明了Yaf将要在INI配置中读取的节的名字
- yaf.library[NULL] : PHP_INI_ALL,全局类库的目录路径
- yaf.cache_config[0] : PHP_INI_SYSTEM,是否缓存配置文件(只针对INI配置文件生效), 打开此选项可在复杂配置的情况下提高性能
- yaf.name_suffix[1] : PHP_INI_ALL,在处理Controller, Action, Plugin, Model的时候, 类名中关键信息是否是后缀式, 比如UserModel, 而在前缀模式下则是ModelUser
- yaf.name_separator[""] : PHP_INI_ALL,在处理Controller, Action, Plugin, Model的时候, 前缀和名字之间的分隔符, 默认为空, 也就是UserPlugin, 加入设置为"_", 则判断的依据就会变成:"User_Plugin", 这个主要是为了兼容ST已有的命名规范
- yaf.forward_limit[5] : PHP_INI_ALL,forward最大嵌套深度
- yaf.use_namespace[0] : PHP_INI_SYSTEM,开启的情况下, Yaf将会使用命名空间方式注册自己的类, 比如Yaf_Application将会变成Yaf\Application
- yaf.use_spl_autoload[0] : PHP_INI_ALL,开启的情况下, Yaf在加载不成功的情况下, 会继续让PHP的自动加载函数加载, 从性能考虑, 除非特殊情况, 否则保持这个选项关闭

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