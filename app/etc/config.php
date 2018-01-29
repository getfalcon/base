<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

use yii\helpers\ArrayHelper;

$web     = require 'web.php';
$test    = require 'test.php';
$common  = require 'common.php';
$console = require 'console.php';

$configWeb     = ArrayHelper::merge($common, $web);
$configTest    = ArrayHelper::merge($configWeb, $test);
$configConsole = ArrayHelper::merge($common, $console);

$config = [
	'web'     => $configWeb,
	'test'    => $configTest,
	'console' => $configConsole
];

if (YII_ENV_DEV) {
	$config['web']['bootstrap'][]      = 'debug';
	$config['web']['modules']['debug'] = [
		'class' => 'yii\debug\Module'
	];

	$config['web']['bootstrap'][]    = 'gii';
	$config['web']['modules']['gii'] = [
		'class' => 'yii\gii\Module'
	];

	$config['console']['bootstrap'][]    = 'gii';
	$config['console']['modules']['gii'] = [
		'class' => 'yii\gii\Module',
	];
}

return $config;