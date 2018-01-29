<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

$pathList[] = dirname(__DIR__) . '/modules/*/*/registration.php';
$pathList[] = dirname(__DIR__) . '/themes/*/*/registration.php';
foreach ($pathList as $path) {
	// Sorting is disabled intentionally for performance improvement
	$files = glob($path, GLOB_NOSORT);
	if ($files === false) {
		throw new \RuntimeException('glob() returned error while searching in \'' . $path . '\'');
	}
	foreach ($files as $file) {
		include $file;
	}
}
