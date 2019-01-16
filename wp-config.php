<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'rsc');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^-7j.B;T=9F+M2_G?iOPiaM5=V|9j-_LUQn2>a~<|J()G?`{^=J]fpweI/J=c,~#');
define('SECURE_AUTH_KEY',  'uzG2;r[8lb3E!RA9^!|Q69%/HaJDShRn+Bw|1c<])~Zfq^K9ry bi2V--@?,_Y(@');
define('LOGGED_IN_KEY',    'O+AY;S`/C-c<lo$GJ>/kt-3`_ISX(]d%uSD34 8c3K;9m:}Q:HZ4EWZCl+5,:5t>');
define('NONCE_KEY',        '`r]q492?B1Ee>U^[*iRrcPU fco[P][[0E_.1D,?^XiId1B.FtctSNB^6dWCkZ&{');
define('AUTH_SALT',        '0oMRj3{2p@ TI[Fy?jU:g`>UfVfL|Mz)_T8_z]/RwULv<)n{C@|@pD4Q1UG_5SA[');
define('SECURE_AUTH_SALT', 'F0O=|q?IUio>q[^)W?phX[F:#$oq`,(iBli`h$eS^+c]Yb.<_lu<S%}X? C.~u;%');
define('LOGGED_IN_SALT',   '= pFFY):FCK8e,-be!^<!`=<x&bEo[F n HJQNs#|dNZ#>/2DN&!/t!6asgsYShy');
define('NONCE_SALT',       '?JNEvE}*]aiHoEZxFMbWo+q<@J)X/0)eEU-R!cBuk||pZ99E/sih!a#0,fT1:PVf');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
