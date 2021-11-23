<?php

const DEBUG = 1;
define("ROOT", dirname(__DIR__));
const WWW = ROOT . '/public';
const APP = ROOT . '/app';
const CORE = ROOT . '/vendor/ishop/core';
const LIBS = ROOT . '/vendor/ishop/core/libs';
const CACHE = ROOT . '/tmp/cache';
const CONF = ROOT . '/config';
const LAYOUT = 'default';

$protocol  = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
$app_path = "{$protocol}://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace("#[^/]+$#", '', $app_path);
$app_path = str_replace('/public/', '', $app_path);
define("PATH", $app_path);
const ADMIN = PATH . '/admin';

require_once ROOT . '/vendor/autoload.php';