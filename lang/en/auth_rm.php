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
 * Strings for component 'aut_rm', language 'pt-BR'.
 *
 * @package   auth_rm
 * @copyright 2024 Milrak Pereira Pessoa
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Autenticador RM';
$string['description'] = 'Plugin de Integração RM TOTVS com Moodle';

$string['host_tbc'] = 'Host TBC';
$string['host_tbc_description'] = 'Para mais informações consulte:<br><a target="_blank" href="https://centraldeatendimento.totvs.com/hc/pt-br/articles/360058761593-Cross-Segmentos-Backoffice-RM-Integra%C3%A7%C3%A3o-API-Como-s%C3%A3o-utilizados-as-Autentica%C3%A7%C3%B5es-Basic-e-Bearer-Token">RM - Integração - API - Como são utilizados as Autenticações Basic e Bearer Token</a><br><a target="_blank" href="https://tdn.totvs.com/pages/releaseview.action?pageId=419548959">API Perfil do Usuário</a>';
$string['host_tbc_default'] = 'http://<host>:<port>';

$string['createuserdefault'] = 'Cria usuário?';
$string['createuserdefault_description'] = 'Caso usuário não exista no moodle, o mesmo será criado quando login autorizado.';

$string['mesageusernotfoud'] = 'Mensagem Personalizada para usuário não integrado';
$string['mesageusernotfoud_description'] = 'Mensagem apresentada caso o login seja autorizado porém não exista usuário. (ignora se: auth_tbccreateuserdefault=true)';
$string['mesageusernotfoud_value'] = 'Usuário não Integrado à plataforma';


$string['mesage_token_notfound'] = 'Não foi possível capturar o token no retorno da requisição.';
$string['mesage_fail_request_tbc'] = 'Não foi possível estabelecer conexão com TBC.';
$string['mesage_user_notfound_default'] = 'Usuário não existe.';

$string['updateuserdefault'] = 'Atualiza usuário?';
$string['updateuserdefault_description'] = 'Atualiza informações do usuário ao logar.';

$string['allowlogingetsession'] = 'Login com TOKEN do RM Portal Educacional?';
$string['allowlogingetsession_description'] = 'Permite que o usuário autentice usando o $key passado na integração com o portal educacional.';

$string['allowedorigin'] = 'Origem permitida';
$string['allowedorigin_description'] = 'Informe a URL ou domínio autorizado a consumir o endpoint de login. Exemplo: https://meuportaledu.com.br';

$string['urlgetsession'] = 'URL GetSession';
$string['urlgetsession_description'] = 'Endeço onde o token será descriptografado.';

$string['pluginisdisabled'] = 'Plugin autenticador RM está desabilitado';
$string['getsessiondisabled'] = 'Autenticação via GetSession está desabilitada, ative nas configurações do plugin.';

$string['variablekey'] = 'Variável do parâmetro';
$string['variablekey_description'] = 'Variável do parâmetro, que é enviada ';
$string['variablekey_default'] = 'key';

$string['invalidresponsa'] = 'Não foi possível validar suas informações automaticamente. Por favor, acesse utilizando suas credenciais de aluno.';
$string['jsonerror'] = 'Não foi possível processar as informações recebidas. Por favor, acesse utilizando suas credenciais de aluno.';
$string['jsonempty'] = 'A conexão com o portal foi concluída, mas não retornou nenhuma informação. Por favor, acesse utilizando suas credenciais de aluno.';
$string['portalhttperror'] = 'Não foi possível se conectar ao portal para acesso via SSO. Por favor, acesse utilizando suas credenciais de aluno.';

$string['ratelimitgetsession'] = 'Limite de requisições por minuto.';
$string['ratelimitgetsession_description'] = 'Limita a quantidade de requisições para login.';
$string['ratelimitexceeded'] = 'Por segurança, o acesso via SSO foi bloqueado temporariamente após {$a} tentativas em um minuto. Acesse com suas credenciais do portal do aluno para prosseguir.';

$string['blockadminsso'] = 'Bloquear administrador via SSO';
$string['blockadminsso_description'] = 'Quando marcado não permite que administradores acessem via SSO/GetSession';
$string['adminssoblocked'] = 'Usuário adminstrador. Por favor, acesse utilizando suas credenciais.';

 ?>