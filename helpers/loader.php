<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Fri Oct  7 16:58:53 WEST 2016
//


$i = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);

foreach ($i as $f) {
	if ($f->getFilename() !== 'loader.php') {
		require_once $f->getPathname();
	}
}
