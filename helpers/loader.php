<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Tue Oct  4 21:32:38 WEST 2016
//


$i = new FileSystemIterator(__DIR__, FileSystemIterator::SKIP_DOTS);

foreach ($i as $f) {
	if ($f->getFilename() !== 'loader.php') {
		require_once $f->getPathname();
	}
}
