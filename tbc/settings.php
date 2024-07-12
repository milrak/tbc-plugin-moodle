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
 * @package auth_tbc
 * @copyright  2024 Milrak Pereira Pessoa
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    $settings->add(new admin_setting_heading('auth_tbc/pluginname', '',new lang_string('auth_tbcdescription', 'auth_tbc')));

    $settings->add(new admin_setting_configtext('auth_tbc/host_tbc',
        new lang_string('auth_tbchost_tbc', 'auth_tbc'),
        new lang_string('auth_tbchost_tbc_description', 'auth_tbc'),
        new lang_string('auth_tbhost_tbc_default', 'auth_tbc'),
        PARAM_RAW)
    );

    $yesno = array(
        new lang_string('no'),
        new lang_string('yes'),
    );

    $settings->add(new admin_setting_configselect('auth_tbc/createuserdefault',
        new lang_string('auth_tbccreateuserdefault', 'auth_tbc'),
        new lang_string('auth_tbccreateuserdefault_description', 'auth_tbc'),
        0,
        $yesno)
    );

    $settings->add(new admin_setting_configtext('auth_tbc/mesageusernotfoud',
        new lang_string('auth_tbcmesageusernotfoud', 'auth_tbc'),
        new lang_string('auth_tbcmesageusernotfoud_description', 'auth_tbc'),
        '',
        PARAM_RAW)
    );
}
