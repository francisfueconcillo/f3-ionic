<?php

require "vendor/autoload.php";

$f3 = \Base::instance();
$f3->set('DEBUG',1);

if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');
$f3->config('routes.ini');
$f3->run();
