<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Fri Oct  7 12:23:08 WEST 2016
// 


$classes = [];
$i = new FilesystemIterator(__DIR__, FileSystemIterator::SKIP_DOTS);

foreach ($i as $f) {
	if (!in_array($i->getFilename(), ['loader.php', 'Provider.php'])) {
		$classes[] = 'App\Providers\\' 
			. preg_replace('/(.*)\.php/', '$1', $i->getFilename());
	}
}

return array_reverse($classes);
