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
define('DB_NAME', 'elsasite');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'p69l/SNS 4s%R``>T91^=1<c{M+DqR*qUnQ?DB`MN~J!uI3}1hgO(ot%wO]&H~q<');
define('SECURE_AUTH_KEY',  'tIn3wiK_s-LH~V2VhIy}57KO*koGAoAm3YvFFyt%(L&KUb;r9H%~oF1w/N1Q]wU+');
define('LOGGED_IN_KEY',    'zA!0hb 9O[EY,jy-F_2B>cWWeQXR01z~&OYKHP@ZB]E[b>K[tkXz8 >D^}*#(|0v');
define('NONCE_KEY',        'z5;Jv,9E#keQPzK/C2Dn>wY3z3)W3Y;+?&H1IOV#lEzw-xTb=(5*;H-7LG 1_POR');
define('AUTH_SALT',        'YqxE.RpQZrFu~_d}[dD.$WcrU8~.|RIM,)zZ%J=,n~dk+H7QR+|S/c&GCVN1Wl|0');
define('SECURE_AUTH_SALT', 'f6,%M_<gBU;-9%2Iq)*|-fW}dlHgT${Y_`gzz[N$y9`jF,9;~y-?GTCw2T&%JjRT');
define('LOGGED_IN_SALT',   'zZ9$P>q==w[[o{lK)E|%/V?M;++55dQ3N/&cOE`,G/a1-=Fc}8DVo]j]@H*`v/lY');
define('NONCE_SALT',       '[8V|o&bi U7I`EE74/>;,yx,=}wj*h/j7$?tQQ?Y_,M^ psV<HN9_Av-ufL&D%yX');

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
