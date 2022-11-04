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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'teste1.0' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '!oxF!>`C4+YziaoI8CrRO6IF[xgG=7.kA#k;{(ap,qlbNDRu_zZ>E;%Do70i]sXr' );
define( 'SECURE_AUTH_KEY',  ']PAP]q@)X>MEjSwok:v/;0K,|8S@JY#K]@MRBYJmSO66l!hVEKqI*@P5|j%v2lAG' );
define( 'LOGGED_IN_KEY',    '&jH7OVJo03ELJ>y9cW#w`]Q<}gKs_{B}s)|a, Zb;/wR,g<B`1dh_Pb&>:N/Z#EK' );
define( 'NONCE_KEY',        ',E7VJw);@J2s=UkC5#0*:}!)Q^8fe+=0|.5?T2jK8(88uw]ZV1H;W _Uh*wx>_sm' );
define( 'AUTH_SALT',        'PF1$Vj/BmO.&(0F`F9b8[; Dd`@[anyA`;bLN.J8dFGNp|yspAJ/kOzd!(mI/t-S' );
define( 'SECURE_AUTH_SALT', 'YV?oxEMkMdCP,+z=(qD{GUyS`UC<sQV5(zh&W+q}INeI#$:{POW;+Xh#t_#rW%%o' );
define( 'LOGGED_IN_SALT',   'cEu{ U[-9K0_N=%/ A~oL/KRi|5n3`ZI`D~fe#$#A<vc#9I+D3wYQ=l<f&q=|dBT' );
define( 'NONCE_SALT',       ';y7-LVL];T+(1n-l.B_K<pK0x$j@WG@w><*UhK!>oF^EH%?ZrGZ!4~8B-S>9QLPQ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
