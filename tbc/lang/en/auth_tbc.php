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
 * Strings for component 'auth_tbc', language 'en'.
 *
 * @package   auth_rm
 * @copyright 2024 Milrak Pereira Pessoa
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Autenticador via TBC';
$string['auth_tbcdescription'] = 'Plugin permite validar se o usuário no RM via TBC';

$string['auth_tbchost_tbc'] = 'Host TBC';
$string['auth_tbchost_tbc_description'] = 'Para mais informações consulte:<br><a target="_blank" href="https://centraldeatendimento.totvs.com/hc/pt-br/articles/360058761593-Cross-Segmentos-Backoffice-RM-Integra%C3%A7%C3%A3o-API-Como-s%C3%A3o-utilizados-as-Autentica%C3%A7%C3%B5es-Basic-e-Bearer-Token">RM - Integração - API - Como são utilizados as Autenticações Basic e Bearer Token</a><br><a target="_blank" href="https://tdn.totvs.com/pages/releaseview.action?pageId=419548959">API Perfil do Usuário</a>';
$string['auth_tbhost_tbc_default'] = 'http://<host>:<port>';

$string['auth_tbccreateuserdefault'] = 'Cria usuário automaticamente';
$string['auth_tbccreateuserdefault_description'] = 'Caso usuário não exista no moodle, o mesmo será criado quando login autorizado.';

$string['auth_tbcmesageusernotfoud'] = 'Mensagem Personalizada para usuário não integrado';
$string['auth_tbcmesageusernotfoud_description'] = 'Mensagem apresentada caso o login seja autorizado porém não exista usuário. (ignora se: auth_tbccreateuserdefault=true)';
$string['auth_tbcmesageusernotfoud_value'] = 'Usuário não Integrado à plataforma';


$string['auth_tbcmesage_token_notfound'] = 'Não foi possível capturar o token no retorno da requisição.';
$string['auth_tbcmesage_fail_request_tbc'] = 'Não foi possível estabelecer conexão com TBC.';
$string['auth_tbcmesage_user_notfound_defaut'] = 'Usuário não existe.';

 ?>