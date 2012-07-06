<?php

define('ABSPATH', dirname(dirname(__FILE__)) . '/');
define('SYSPATH', ABSPATH . 'sys/');
define('CLASSPATH', SYSPATH . 'class/');
define('LIBSPATH', SYSPATH . 'libs/');
define('INITPATH', SYSPATH . 'init/');

//Include libraria smarty si fa setarile necesare
require_once INITPATH.'smarty.php';