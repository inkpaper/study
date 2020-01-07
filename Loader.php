<?php

/**
 * 自动加载机制
 */
class Loader
{
    private static $classMap = [
        'Design' => __DIR__ . DIRECTORY_SEPARATOR . 'Design'
    ];

    public static function __autoload($class)
    {
        $file = self::findFile($class);
        if (file_exists($file))
            self::requireFile($file);
    }

    /**
     * 根据类名查找文件
     * @param $class
     * @return string
     */
    private static function findFile($class)
    {
        //获取文件夹
        $dir = substr($class, 0, strpos( $class, '\\'));
        //根据map查找文件夹，否则首字母大写
        $firstNameSpace = isset(self::$classMap[$dir]) ? self::$classMap[$dir] : __DIR__ . DIRECTORY_SEPARATOR . ucfirst($dir);

        //获取类名
        $className = substr($class, strlen($dir)) . '.php';
        $fileName = strtr($firstNameSpace . $className, '\\', DIRECTORY_SEPARATOR);
        return $fileName;
    }

    /**
     * 包含文件
     * @param $file
     */
    private static function requireFile($file)
    {
        if (is_file($file))
            require_once $file;
    }
}