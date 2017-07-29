<?php
/**
 * Craft web bootstrap file
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/vendor/autoload.php';

// SpaceCraft
define('CRAFT_BASE_PATH', $root);
define('CRAFT_ENVIRONMENT', getenv('SPACECRAFT_ENVIRONMENT'));
define('CRAFT_CONFIG_PATH', '../craft/config/');
define('CRAFT_STORAGE_PATH', '../craft/storage/');

// Craft
$app = require $root.'/vendor/craftcms/cms/bootstrap/web.php';
$app->run();
