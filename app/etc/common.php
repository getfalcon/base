<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

$basePath = dirname(__DIR__);
$webRoot  = dirname($basePath);

return [
	'basePath'    => $basePath,
	'runtimePath' => $webRoot . '/runtime',
	'vendorPath'  => $webRoot . '/vendor',
	'bootstrap'   => ['\falcon\core\components\Bootstrap'],
	'aliases'     => [
		'@bower' => '@vendor/bower-asset',
		'@npm'   => '@vendor/npm-asset'
	],
	'components'  => [
		'db'    => [
			'class'    => 'yii\db\Connection',
			'dsn'      => 'mysql:host=localhost;dbname=yii-mage',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8'
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'log'   => [
			'targets' => [
				[
					'class'  => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		]
	],
	'params'      => [
		'adminEmail' => 'admin@example.com',
	],
];