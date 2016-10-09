<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Sat Oct  8 21:47:38 WEST 2016
// 


if (!function_exists('_get_file_base_path')) {
	/**
	 * Get the base path to the given file.
	 *
	 * @param string	$folder
	 * @param string	$file
	 *
	 * @return string
	 */
	function _get_file_base_path($folder, $file)
	{
		if ($file) {
			return BASE_PATH . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $file;
		}

		return BASE_PATH . DIRECTORY_SEPARATOR . $folder;
	}
}


if (!function_exists('public_path')) {
	/**
	 * Get public folder path.
	 *
	 * @param string	$file
	 *
	 * @return string
	 */
	function public_path($file = null)
	{
		return _get_file_base_path('public', $file);
	}
}

if (!function_exists('app_path')) {
	/**
	 * Get app folder path.
	 * 
	 * @param string	$file
	 *
	 * @return string
	 */
	function app_path($file = null)
	{
		return _get_file_base_path('app', $file);
	}
}

if (!function_exists('database_path')) {
	/**
	 * Get database folder path.
	 *
	 * @param string	$file
	 *
	 * @return string
	 */
	function database_path($file = null)
	{
		return _get_file_base_path('database', $file);
	}
}

if (!function_exists('resources_path')) {
	/**
	 * Get resources folder path.
	 *
	 * @param string	$file
	 *
	 * @return string
	 */
	function resources_path($file = null)
	{
		return _get_file_base_path('resources', $file);
	}
}

if (!function_exists('routes_path')) {
	/**
	 * Get routes folder path.
	 *
	 * @param string	$file
	 *
	 * @return string
	 */
	function routes_path($file = null)
	{
		return _get_file_base_path('routes', $file);
	}
}

if (!function_exists('storage_path')) {
	/**
	 * Get storage folder path.
	 *
	 * @param string	$file
	 *
	 * @return string
	 */
	function storage_path($file = null)
	{
		return _get_file_base_path('storage', $file);
	}
}

if (!function_exists('vendor_path')) {
	/**
	 * Get vendor folder path.
	 *
	 * @param string	$file
	 *
	 * @return string
	 */
	function vendor_path($file = null)
	{
		return _get_file_base_path('vendor', $file);
	}
}
