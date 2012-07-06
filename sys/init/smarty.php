<?php
require_once LIBSPATH.'Smarty/Smarty.class.php';

$Smarty = new Smarty;

$Smarty
		->setTemplateDir(SYSPATH.'smarty/templates/')
		->setCompileDir( SYSPATH.'smarty/compiles/')
		->setCacheDir(   SYSPATH.'smarty/cache/');
#$Smarty->error_reporting = E_ALL;
#$Smarty->debugging = true;