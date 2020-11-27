<?php

class autoload
{
    public static function load($className)
    {
        $fileName = str_replace('\\', '/', $className);
        $fileName = sprintf('%s.php', $fileName);
        
        if (is_file($fileName)) {
            require_once $fileName;
        }
    }
}
// 注册到spl_autoload_register中
// 触发autoload的load加载方法
spl_autoload_register(['autoload', 'load']);
