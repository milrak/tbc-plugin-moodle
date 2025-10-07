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
 * Admin settings and defaults.
 *
 * @package    auth_rm
 * @copyright  2024 Milrak Pereira Pessoa
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
//require_once(dirname(__FILE__) . '/../../config.php');


if (!is_enabled_auth('rm')) {
    throw new moodle_exception(get_string('pluginisdisabled', 'auth_rm'));
}


$auth = get_auth_plugin('rm');
if (!$auth->is_getsession_enabled()) {
    throw new moodle_exception('getsessiondisabled', 'auth_rm');
}

$auth->user_login_get_session_portal_edu();
