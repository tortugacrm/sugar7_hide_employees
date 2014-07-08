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
 
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


require_once 'modules/ACLRoles/ACLRole.php';

class UsersFilterHook
{
	public static function UsersFilter(Employee $beanUser, $event, $args)
	{
		global $current_user;
		if ($current_user->is_admin) return;
		
		$GLOBALS['log']->warn("######## Entering UsersFilter");
		$isTestUser = false;
		$TestUserRole = 'interface user';
		$userRoles = ACLRole::getUserRoleNames($current_user->id);
		if (count($userRoles)==0) return;
		
		foreach ($userRoles as $r) {
			if ($r == $TestUserRole) {
				$isTestUser = true;
				break;
			}
		}
		if (!$isTestUser) return;
		//if (strpos($_SERVER['REQUEST_URI'], 'index.php?module=Employees') !== false) {
			$beanUser->last_name = '';
			$beanUser->first_name = '';
			$beanUser->title = '';
			$beanUser->reports_to_name = '';
			$beanUser->email1 = '';
			$beanUser->email2 = '';
			$beanUser->phone_work = '';
			$beanUser->department = '';
			$beanUser->department = '';
			//$beanUser->status = 'Inactive';
			$beanUser->date_entered = '';
		//}
		$GLOBALS['log']->warn("######## Exiting UsersFilter");
	}
		
}
?>
