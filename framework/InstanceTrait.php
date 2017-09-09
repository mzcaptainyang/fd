<?php
namespace Fd;

trait InstanceTrait
{
    private static $instances;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @return static
     */
    public static function getInstance()
    {
        $className = get_called_class();
        $args = func_get_args();
        // serialize 无法处理 resource 类型，如果 $arg 中有 resource ，那么其他参数相同，resource 不同的情况下，无法区分这是不同的实例
        $key = md5($className . ':' . serialize($args));
        if (!isset(self::$instances[$key])) {
            //PHP_VERSION >= 5.6.0
            self::$instances[$key] = new $className(...$args);
        }
        return self::$instances[$key];
    }
}