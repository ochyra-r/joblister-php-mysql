<?php
// Start Session
session_start();

// Config File
require_once 'config.php';

// Include Helpers
require_once 'helpers/system_helper.php';

// Autoloader
function __autoload($calss_name)
{
	require_once 'lib/' . $calss_name . '.php';
}
