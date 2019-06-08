<?php
class Loader
{
    static function loadClass($class)
    {
        $class =  __DIR__.DIRECTORY_SEPARATOR.str_replace('\\','/',$class).'.php';
        if (file_exists($class)) {
            include $class;
            return;
        }
    }
}
spl_autoload_register(array('Loader','loadClass'));
