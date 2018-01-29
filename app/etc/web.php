<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

return [
	'id'         => 'web',
	'bootstrap'  => ['log'],
	'components' => [
		'request'      => [
			'cookieValidationKey' => 'rDqtu6IyDnY--da-AClj1lP_8n_WKGC7',
		],
		'user'         => [
			'identityClass'   => 'app\models\User',
			'enableAutoLogin' => true,
		],
		'errorHandler' => [
			'errorAction' => 'frontend/site/error',
		],
		'mailer'       => [
			'class'            => 'yii\swiftmailer\Mailer',
			'useFileTransport' => false,
		],
		'urlManager'   => [
			'enablePrettyUrl' => true,
			'showScriptName'  => false,
			'normalizer'      => [
				'class'  => 'yii\web\UrlNormalizer',
				'action' => \yii\web\UrlNormalizer::ACTION_REDIRECT_PERMANENT,
			]
		]
	]
];