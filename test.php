<?
require 'vendor/autoload.php'; //自动加载类库

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('SQL');
$date = date('Y-m-d');

//'app/logs/sql_'.$date.'.log'  路径以及日志文件名

//Logger::WARNING 日志级别
$log->pushHandler(new StreamHandler('app/logs/sql_'.$date.'.log', Logger::WARNING));

$error_str = '['.date('Y-m-d H:i:s').']';
$error_str .= 'this is error';

// add records to the log
$log->addWarning('Foo');
$log->addError($error_str);
// end