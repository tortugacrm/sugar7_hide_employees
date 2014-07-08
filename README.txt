'Hide Employees list'.

This module will hide the Employees list in the User Interface for a specific role.
Usage example: you do not want a group of users to get access to this list.

Caution: this is a worse practice. Actually, the user module is critical and cannot be hidden. 
Therefore, the user list is still reachable through the API or the url: 
{instance}/index.php#bwc/index.php?module=Users&action=DetailView&record=xxxyyyzzz

By default, the role is 'interface user'.

Installation:
- Upload the zip file in the archive with the Module Loader
- Build & Repair
Test:
- Create the new role 'interface user'
- Add Chris Oliver e.g. to that role
- Repair the Roles
- Open an incognito Google Chrome window
- Log in as Chris
- Go to the Employees list

Copyright 2014 Olivier Nepomiachty - All rights reserved.

Release notes:
v 0.0.0.22 - 8 July 2014
Original release.
