<?php
error_reporting(E_ALL);
define('BASE_DIR', __DIR__.'/');
session_start();
require_once __DIR__.'/config/Config.php';
require_once __DIR__.'/config/MyDatabase.php';
require_once __DIR__.'/core/CheckLogin.php';
require_once __DIR__.'/core/BaseModel.php';
require_once __DIR__.'/core/BaseController.php';
require_once __DIR__.'/core/Router.php';

$uri = isset($_GET['url']) ? $_GET['url'] : '';

Router::route($uri);
