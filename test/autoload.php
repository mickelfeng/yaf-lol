<?php
/**
 * Created by PhpStorm.
 * User: zhouwenlong_91
 * Date: 2015/10/15
 */
//FIXME: phpunit没有的类 会触发yaf的自动导入，导致warning错误。。
error_reporting(E_ERROR);

define('APPLICATION_PATH', dirname(dirname(__FILE__)));
define('APP_PATH', APPLICATION_PATH . '/application');
define('APP_DEBUG', false);
define('APP_ANALYZE', false); //性能分析
define('APP_MICROTIME_START', microtime(true));
define('APP_MEMORY_START', memory_get_usage());

$application = new Yaf\Application( APPLICATION_PATH . "/conf/application.ini");
$autoloader = require APPLICATION_PATH . '/vendor/autoload.php';
/**
 * 这里指定临时的命名空间，用于单元测试
 */
//$autoloader->add('Util\\', APPLICATION_PATH."/library/util/", true);
