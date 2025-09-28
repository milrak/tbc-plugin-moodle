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
 * Anobody can login with any password.
 *
 * @package auth_rm
 * @author Milrak Pereira Pessoa
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/authlib.php');
require_once($CFG->libdir . '/filelib.php');

/**
 * Plugin for no authentication.
 */
class auth_plugin_rm extends auth_plugin_base {

    protected const URL_GET_TOKEN = '/api/connect/token/';

    /**
     * Constructor.
     */
    public function __construct() {
        $this->authtype = 'rm';
        
        $this->config = get_config('auth_rm');
    }

    /**
     * Old syntax of class constructor. Deprecated in PHP7.
     *
     * @deprecated since Moodle 3.1
     */
    public function auth_plugin_rm() {
        debugging('Use of class name as constructor is deprecated', DEBUG_DEVELOPER);
        self::__construct();
    }

    /*
     * Returns true if the username and password work or don't exist and false
     * if the user exists and the password is wrong.
     *
     * @param string $username The username
     * @param string $password The password
     * @return bool Authentication success or failure.
     */
    function user_login($username, $password) {

        $this->get_token_tbc($username, $password);

        $user = get_complete_user_data('username', $username);

        if(!$user){
            $mesage = $this->config->mesageusernotfoud ? $this->config->mesageusernotfoud : get_string('auth_rmmesage_user_notfound_defaut', 'auth_rm');
            $this->send_mesage_page_login($mesage);
        }

        return true;
    }

    
    private function get_token_tbc($username, $password){

        $url = $this->config->host_rm.''.self::URL_GET_TOKEN;
        
        $curl = new curl();
        $curl->setHeader(array('Content-type: application/json'));

        $data = "{'username': '{$username}', 'password': '{$password}'}";

        $response = $curl->post($url, $data, array(
            'CURLOPT_SSL_VERIFYHOST' => 0,
            'CURLOPT_SSL_VERIFYPEER' => false,
            'CURLOPT_RETURNTRANSFER' => true,
        ));

        $info = $curl->get_info();
        if ($info['http_code'] != 200) {
            $response = json_decode($response);
            if (!empty($response->Code)) {
                $this->send_mesage_page_login($response->Code.' - '.$response->Message);
            } else {
                $this->send_mesage_page_login(get_string('auth_rmmesage_fail_request_rm', 'auth_rm'));
        }
    }

    $token = json_decode($response)->access_token;

    if (empty($token)) {
        $this->send_mesage_page_login(get_string('auth_rmmesage_token_notfound', 'auth_rm'));
    }
    return $token;

    }

    private function send_mesage_page_login($mesage){
        global $SESSION;

        $SESSION->loginerrormsg = $mesage;
        redirect(new moodle_url('/login/index.php'));
    }

    function prevent_local_passwords() {
        return false;
    }

    /**
     * Returns true if this authentication plugin is 'internal'.
     *
     * @return bool
     */
    function is_internal() {
        return true;
    }

    /**
     * Returns true if this authentication plugin can change the user's
     * password.
     *
     * @return bool
     */
    function can_change_password() {
        return false;
    }

    /**
     * Returns the URL for changing the user's pw, or empty if the default can
     * be used.
     *
     * @return moodle_url
     */
    function change_password_url() {
        return null;
    }

    /**
     * Returns true if plugin allows resetting of internal password.
     *
     * @return bool
     */
    function can_reset_password() {
        return false;
    }

    /**
     * Returns true if plugin can be manually set.
     *
     * @return bool
     */
    function can_be_manually_set() {
        return true;
    }

}
