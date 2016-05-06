<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cuidadoglobal');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2H^GJcz}?26y|J>M cq0/UMl^{!>H!$/TIs7m-*%44rFb-&DHNB3G_idn^:f0p!!');
define('SECURE_AUTH_KEY',  ';o{n.]RT(*gHx:|5yjV-R i&0Th)(|i4GHo:U0857`awN?IwZs_oLAqx=+0N1`mf');
define('LOGGED_IN_KEY',    '@tKq%*BfK=%Ro%`xYSX?jT!OtQERsL=S,!(o2>mKq2NX9?bJ P4Z|:V $V/J[h+f');
define('NONCE_KEY',        '<6e|#aUFQt_W6}JN8cc2.yE;_hO4.Y*:_m&{]9=$dJ /.l[yV$1-:_n(D3wSbQnm');
define('AUTH_SALT',        'e/NqN!$OU4 UY)ty}}GG)SU{8:Szv5$nZGKu1x>f^0[3!SLPhjtRxcEI{gr(pUEX');
define('SECURE_AUTH_SALT', '!AgZ.<g!l1`*HJ0Y$Yx0%gp3?Ig{w/qL.3:q1`/+uzzEJr:gq!Z`R4bMDwN{rG9H');
define('LOGGED_IN_SALT',   'i<B-Xppp]fF8^F6@LAX1n5$%BZs|vZ4_=VPzcQ-d4R2E9VL!t)b-9?R{z$4CJS31');
define('NONCE_SALT',       'Nbep3N>V<+yvNj;d5joSA]6KIa>%K=XQ.aG;Gp7pzk:_[mEkm@tVC[6@SX80>!d?');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
