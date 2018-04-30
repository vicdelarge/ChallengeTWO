<?php

namespace app;

class Autoloader
{
    public function handle($class)
    {
        $file = "src/" . str_replace('\\', '/', $class . '.php');
        if (!file_exists($file)) {
            throw new \Exception('class ' . $class . ' file does not exist');
        }
        include_once $file;
    }
}
$autoloader = new Autoloader();
spl_autoload_register(array($autoloader, 'handle'));