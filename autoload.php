<?php

spl_autoload_register('autoload');
function autoload($class)
{
	$className = __DIR__ . "/$class";
	$className = str_replace('\\', '/', $className . '.php');
    require $className;
	return [];
    require (($_SERVER['SCRIPT_FILENAME']) . '//..//' . str_replace('\\', '/', $class) . '.php');
}
