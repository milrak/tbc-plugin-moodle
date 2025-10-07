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

    $settings->add(new admin_setting_heading('auth_rm/pluginname', '',new lang_string('description', 'auth_rm')));

    $settings->add(new admin_setting_configtext('auth_rm/host_rm',
        new lang_string('host_tbc', 'auth_rm'),
        new lang_string('host_tbc_description', 'auth_rm'),
        new lang_string('host_tbc_default', 'auth_rm'),
        PARAM_RAW)
    );

    $yesno = array(
        new lang_string('no'),
        new lang_string('yes'),
    );

    $settings->add(new admin_setting_configselect('auth_rm/createuserdefault',
        new lang_string('createuserdefault', 'auth_rm'),
        new lang_string('createuserdefault_description', 'auth_rm'),
        0,
        $yesno)
    );

    $settings->add(new admin_setting_configselect('auth_rm/updateuserdefault',
        new lang_string('updateuserdefault', 'auth_rm'),
        new lang_string('updateuserdefault_description', 'auth_rm'),
        0,
        $yesno)
    );

    $settings->add(new admin_setting_configtext('auth_rm/mesageusernotfoud',
        new lang_string('mesageusernotfoud', 'auth_rm'),
        new lang_string('mesageusernotfoud_description', 'auth_rm'),
        '',
        PARAM_RAW)
    );

    $settings->add(new admin_setting_configselect('auth_rm/allowlogingetsession',
        new lang_string('allowlogingetsession', 'auth_rm'),
        new lang_string('allowlogingetsession_description', 'auth_rm'),
        0,
        $yesno)
    );

    $settings->add(new admin_setting_configtext('auth_rm/variablekey',
        new lang_string('variablekey', 'auth_rm'),
        new lang_string('variablekey_description', 'auth_rm'),
        new lang_string('variablekey_default', 'auth_rm'),
        PARAM_ALPHANUMEXT)
    );

    $settings->add(new admin_setting_configtext('auth_rm/allowed_origin',
        new lang_string('allowedorigin', 'auth_rm'),
        new lang_string('allowedorigin_description', 'auth_rm'),
        '',
        PARAM_URL
    ));

    $settings->add(new admin_setting_configtext('auth_rm/urlgetsession',
        new lang_string('urlgetsession', 'auth_rm'),
        new lang_string('urlgetsession_description', 'auth_rm'),
        '',
        PARAM_URL
    ));

    $settings->add(new admin_setting_configtext('auth_rm/ratelimitgetsession',
        get_string('ratelimitgetsession', 'auth_rm'),
        get_string('ratelimitgetsession_description', 'auth_rm'),
        5,
        PARAM_INT
    ));

    $settings->add(new admin_setting_configcheckbox(
        'auth_rm/blockadminsso',
        get_string('blockadminsso', 'auth_rm'),
        get_string('blockadminsso_description', 'auth_rm'),
        1
    ));
}
