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
 * @package auth_rm
 * @copyright  2024 Milrak Pereira Pessoa
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading('auth_rm/pluginname', '',new lang_string('auth_rm_description', 'auth_rm')));

    $settings->add(new admin_setting_configtext('auth_rm/host_rm',
        new lang_string('auth_rm_host_tbc', 'auth_rm'),
        new lang_string('auth_rm_host_tbc_description', 'auth_rm'),
        new lang_string('auth_rm_host_tbc_default', 'auth_rm'),
        PARAM_RAW)
    );

    $yesno = array(
        new lang_string('no'),
        new lang_string('yes'),
    );

    $settings->add(new admin_setting_configselect('auth_rm/createuserdefault',
        new lang_string('auth_rm_createuserdefault', 'auth_rm'),
        new lang_string('auth_rm_createuserdefault_description', 'auth_rm'),
        0,
        $yesno)
    );

    $settings->add(new admin_setting_configtext('auth_rm/mesageusernotfoud',
        new lang_string('auth_rm_mesageusernotfoud', 'auth_rm'),
        new lang_string('auth_rm_mesageusernotfoud_description', 'auth_rm'),
        '',
        PARAM_RAW)
    );
}
