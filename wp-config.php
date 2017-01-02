<?php
/**
 * A configuração de base do WordPress
 *
 * O script de criação do ficheiro wp-config.php usa este ficheiro durante
 * a instalação. Não precisa de usar o site pode copiar este ficheiro como
 * "wp-config.php" e preencher os valores
 *
 * Este ficheiro contém as seguintes variáveis:
 *
 * * Definições de MySQL
 * * Chaves secretas
 * * Prefixo das tabelas nas base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'Immersive');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b]^EBp(E{A`.s-ogTPafB/fZq[r}$mJPf@-lRdQmZ@i:3INY`>=5.A9j[YB_a~]L');
define('SECURE_AUTH_KEY',  '9Kl7fND#S{r%9=D,w/EMM=`6`IrmMx8R2zz&bF u94g7@G5@Zd/Z+ji4toqyF~o4');
define('LOGGED_IN_KEY',    '=|HCQR*Kk:h4_B0=M}fGZjujoI`WuHMMRl[|:|,6K9Ka6v#Q7Rt_1opqXNvQbVpH');
define('NONCE_KEY',        'AXP#]oRiT dahY+aGRI$./KcP0I.{T1#55e%.7EH}cuU3:@S.lP&h &/2a2+rJ#v');
define('AUTH_SALT',        'tk}./Msf8BYOgt?j{+Ik/]nK}:$zs)$}T?Bt3J%C?gEbrc`-w]ibmQ24W]3Rr8%s');
define('SECURE_AUTH_SALT', '!-.T]S0sXv+7]:d()<_?^|Ne;|<nxFZ`EV?@~MtB$J+~lrZ,t1E@/ ~x7^DTj{Q=');
define('LOGGED_IN_SALT',   '$gre.|b1c^-#)fqy$1M,A_]yVRu+Bq]A6(Gu~bhY`hzKZ oj6@l=qaeS}D@^]jsK');
define('NONCE_SALT',       'Pm?Qb.z@a/x<NjWEfqIu[`3OobK!$VO]uTAf&i+n=?}eGH-e8ieFm3nx^%~f CUI');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
