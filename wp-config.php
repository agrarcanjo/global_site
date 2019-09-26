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
define( 'DB_NAME', 'global' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'global' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123123123' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ',mMR4U1i|/gPwhkA`O-s!qyCWA20dt#Ikan++zx8qcs?cVtYh]nAeq$(xOm0%$gF' );
define( 'SECURE_AUTH_KEY',  '97G)sxJ:d-#n^qyhLlu^Kk%i%gB^hWRdpf/+l`u:%?yww_?KAV$gCF>~^wlG=c[?' );
define( 'LOGGED_IN_KEY',    '4H:b5;ffLXc>.Y5N)T7kQ^`ZT2uOm}!`GkM?Zl1Y;xx+wr;Gj;,^Qd&SZdn?Q&cg' );
define( 'NONCE_KEY',        'u|Ddq=3PC[( Op+Y&k<.S{MFVpR3bzi):95ZeNTG- AL}Cfr,h`|?#U<AdhB:<d3' );
define( 'AUTH_SALT',        'tJ?bvJ;**10Ig5n/89TY*MlH(mKRRq^M-!]=z%snoYImGRH6W:%3mgSy(+ JBoLw' );
define( 'SECURE_AUTH_SALT', 'XT7k5 %kGPf^%_@bq3oVxmEP[ImerH51M26zZK}&IaBHg?HeL/{f@Z3(`43E+W:Q' );
define( 'LOGGED_IN_SALT',   '?>>I /<3}AP=nRFN0T~N3u~R8Vc_l;R^Cs=VEk[T[s/t P*5I~U!f(uM;wl[PVXC' );
define( 'NONCE_SALT',       '_lGO^:HVlD^NaGFoK8-vf+-&oEX x(mK$M2V=D*v4PPou*:=pZx(2A=2hNUi~l$K' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_global';

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
