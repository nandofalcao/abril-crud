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
define('DB_NAME', 'dev-abril-crud');

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
define('AUTH_KEY',         'KAD]WKqS8Q35pM2UaP!O96y4PbS!SFh:4?Sz}xAxb~0PUWLSe5}D8Z~.0VcB6Rim');
define('SECURE_AUTH_KEY',  'ZMX5;yxLlVV+) Trz?(5+aJqx%0Ear|au$W8-v! wDn40|0P{nl}g0I5siC^b]dB');
define('LOGGED_IN_KEY',    'USk7#R_:I=TGa?k_V*:G[&7MUBK*v7G@eur`7Ie_,7mE}8+QJ3=%_~dM3.E+ !-m');
define('NONCE_KEY',        ' PNE[*}0!S{F#,,A[RcqYcJoqfiUReNSFk+rGL QZ1w6eB(4nhTu|dn~0:-S.c((');
define('AUTH_SALT',        'DnPjlRkF6:u!~8;S/7)U/_{btS](972{$O1AwFd]GRE*e-$z0+ff x_{(o Nn9Zb');
define('SECURE_AUTH_SALT', '4npfTbZF llB3JYZvSU 6<c_tSQ;S1aK~,ULk5LR![LZC/pB#hsTzjUc@zv6;6(!');
define('LOGGED_IN_SALT',   'LY:^:`l{;7b4CL4C$_3SFKTr%Klp$7k?z.2|^9)?q4ALBG%}gwY#ysqxe5[6qv9P');
define('NONCE_SALT',       '?^~!r0_r*<y;v]sdP($9}Q1lElMJl+6 KQX.S<|k1yNs_ItS/E_&d2597!zB<?mR');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'abril_';


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
