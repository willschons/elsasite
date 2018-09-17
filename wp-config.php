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
define('AUTH_KEY',         '9q3 >Lae>)sQF{VV}#,PRq7NYEv0[%U9hi{b.Ih)`Z;FaPcVCq5]Ll]IWevB^Jt3');
define('SECURE_AUTH_KEY',  'SrEJeLDw.6)unk2=l,^R7:=6;IsiLh-&1,>Fd#< *^yqvayzu7J|Nn%VZ`ZJTfyh');
define('LOGGED_IN_KEY',    '(Pr0cun;~@@LYD]D6-Tgnujpe)214zulCF-PGY-A6t,zVOqTp;e?8_s@^ .wvCJP');
define('NONCE_KEY',        'R/>,DuDRRe 8A~1<1SqgXJH~f.46I=/ ;wZGihnYu*@u0X-ef1:y{XwSrs4)?O)P');
define('AUTH_SALT',        '=^=frO0AnVVONt|O<<KjE]oG?`/?_?kpqSRq!W;,K Q3Gr*AA*Os|!n0Q^xy}6op');
define('SECURE_AUTH_SALT', '0/)ZdV376o&p5R&|b{Y}*(K~Ccd_0cAReHCzJ/*O{mvl3xNvTl^qAe;;0gO>@m;Q');
define('LOGGED_IN_SALT',   '-;|F>6E0245@+)KW#B5U:L<wSvwr[Og&rI%ui_3m8LDIhkeYxn#g;2_@(O35leBx');
define('NONCE_SALT',       'SJ&AHu}rTn@Rjuqet2WldJR*WH2OG=]%HP3 A#tu^R3LLgop=3*y-y<s1e 8L,q8');

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
