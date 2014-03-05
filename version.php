<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    auth_ldap
 * @author     Martin Dougiamas
 * @author     Iñaki Arenaza
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$authtype = 'ldap1';
//This commit of ldap clone was built from the script at https://moodle.org/pluginfile.php/183/mod_forum/attachment/1059969/ldap-clones-patch-scriptv10_2.5.2.zip
//This ldap clone works with Moodle 2.5.2+ and 2.5.3+ and was built against Totara 2.5.9 (based on Moodle 2.5.4).

$plugin->version   = 2013052100;        // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2013050100;        // Requires this Moodle version
$plugin->component = 'auth_'.$authtype; // Full name of the plugin (used for diagnostics)
