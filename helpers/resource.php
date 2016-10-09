<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Sat Oct  8 22:37:21 WEST 2016
//


use Symfony\Component\Filesystem\Exception\FileNotFoundException;


if (!function_exists('resource')) {
	/**
	 * Get resource path.
	 *
	 * @param string	$file
	 *
	 * @return string
	 */
	function resource($file)
	{
		$s = new SplFileInfo(public_path($file));
		preg_match('/(.*)\./', $s->getBasename(), $m);

		if (!isset($m[1])) {
			throw new \Exception('Invalid file name format: ' . $s->getBasename());	
		}

		$filename = '';
		$i = new FileSystemIterator($s->getPath(), FilesystemIterator::SKIP_DOTS);

		foreach ($i as $f) {
			$basename = preg_quote($m[1] . '-');

			if (preg_match('/' . $basename . '.*\.' . $s->getExtension() . '$/', $f->getBasename())) {
				$filename = $f->getBasename();
				break;
			}
		}

		if (empty($filename)) {
			throw new FileNotFoundException($path = $file);
		}

		return $s->getPath() . '/' . $filename;
	}
}
