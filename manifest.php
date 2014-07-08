<?php
/*
 *  This file is part of 'Hide Employees list'.
 *
 *  'Hide Employees list' is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation.
 *
 *  'Hide Employees list' is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with 'Hide Employees list'.  If not, see http://www.gnu.org/licenses/gpl.html.
 *
 * Copyright 2014 Olivier Nepomiachty - All rights reserved.
 */

global $sugar_flavor;	

$manifest = array (
	'acceptable_sugar_versions' => 
		array(
			'regex_matches' => array(
				'7\\.[0-9]\\.[0-9]$'
			),
		),			
		
	  'acceptable_sugar_flavors' =>
	  array(
		  0 => 'PRO',
		  1 => 'CORP',
		  2 => 'ENT',
		  3 => 'ULT',
	  ),
	  'readme'=>'README.txt',
	  'key'=>'HEM',
	  'author' => 'Olivier Nepomiachty',
	  'description' => 'Hide Employees list for a specific role',
	  'icon' => '',
	  'is_uninstallable' => true,
	  'name' => 'Hide Employees list',
	  'published_date' => '2014-07-08 08:00',
	  'type' => 'module',
	  'version' => '0.0.0.22',
	  'remove_tables' => false,
);  
  
$installdefs = array (
  'id' => 'HIDEEMPLOYEES0705',

  'copy' => 
  array (		
    0 =>
	array (
	  'from' => '<basepath>/Files/custom/modules/Employees/hide.php',
	  'to' => 'custom/modules/Employees/hide.php',
	),
    1 =>
	array (
      'from' => '<basepath>/Files/custom/modules/Employees/metadata/listviewdefs.php',
      'to' => 'custom/modules/Employees/metadata/listviewdefs.php',
	),
  ),
	
    'logic_hooks' => array(
        array(
			 'module'  => 'Employees',
			 'hook'    => 'process_record',
			 'order'   => 1,
			 'description' => 'Hide Employees list for a specific role',
			 'file'   => 'custom/modules/Employees/hide.php',
			 'class'   => 'UsersFilterHook',
			 'function'  => 'UsersFilter',
        ),
    ),
 
);

