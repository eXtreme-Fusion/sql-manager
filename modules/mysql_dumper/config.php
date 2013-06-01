<?php defined('EF5_SYSTEM') || exit;
/*********************************************************
| eXtreme-Fusion 5
| Content Management System
|
| Copyright (c) 2005-2013 eXtreme-Fusion Crew
| http://extreme-fusion.org/
|
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
*********************************************************/

$mod_info = array(
	'title' => 'MySQL Dumper',
	'description' => 'Zarządzanie bazą danych',
	'developer' => 'Daniel Schlichtholz',
	'support' => 'http://mysqldumper.net/',
	'version' => '1.24.4',
	'dir' => 'mysql_dumper'
);

$admin_page[1] = array(
	'title' => 'MySQL Dumper',
	'image' => 'images/mysql_dumper.png',
	'page' => 'files/index.php',
	'perm' => 'admin'
);

$perm[1] = array(
	'name' => 'admin',
	'desc' => 'Zarządzanie modułem MySQL Dumper'
);