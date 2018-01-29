<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

return [
	'language' => 'en-US',

	'components' => [
		'db'         => [
			'dsn' => 'mysql:host=localhost;dbname=yii-mage-unit-test',
		],
		'mailer'     => [
			'useFileTransport' => true,
		],
		'urlManager' => [
			'showScriptName' => true,
		],
	]
];