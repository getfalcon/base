<?php
/**
 * @package    falcon
 * @author     Hryvinskyi Volodymyr <volodymyr@hryvinskyi.com>
 * @copyright  Copyright (c) 2018. Hryvinskyi Volodymyr
 * @version    0.0.1-alpha.0.1
 */

/**
 * Created by PhpStorm.
 * User: Volodymyr
 * Date: 25.01.2018
 * Time: 21:58
 */

$a = [1, 2, 3,];
foreach ($a as $x) {
	$x *= 2;
}

var_dump($x);

var_dump($$a[0], // NOTICE
	$a[1], $a[2], $$a[0] * $a[1] * $a[2], // NOTICE
	$a[0] * $a[1] * $a[2]);
function fileLineGenerator($file) {
	if ( ! $fh = fopen($file, 'r')) {
		return;
	}
	$ln = 1;
	while (false !== ($line = fgets($fh))) {
		echo '&gt;';
		yield [$ln, $line]; // 5.5+ ( Short array syntax 5.4+ )
		++ $ln;
	}
	fclose($fh);
	//return; // OK
	//return null; // OK
	//return true; // FATAL ERROR
}

var_dump(fileLineGenerator(null), fileLineGenerator(null) instanceof Generator // true!
);