<?php


//
// Author: Oussama Elgoumri
// Email : ktsnepyg9igfz1@gmail.com
//
// Tue Oct  4 21:27:07 WEST 2016
//


switch ($_SERVER['REQUEST_URI']) {
case '/':
	return render('welcome');

default:
	return render('404');
}
