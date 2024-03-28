<?php

defined('DS') ? null : feine('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'php');

defined('INC_PATH') ? null : define('INC_PATH', SITEROOT.DS.'includes');
defined('INC_PATH') ? null : define('INC_PATH', SITEROOT.DS.'core');

// load config file
require_once(INC_PATH.DS.'config.php');


?>
