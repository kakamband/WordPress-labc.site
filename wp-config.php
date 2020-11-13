<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\patriot-228\Desktop\OpenServer\domains\labc-site\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'wp-labc' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UDdPLzc`s0(rwcu;%CDktU5]G~VE3Viyy@R`,VF<,UCO8F=yn#?i(gxVzj57!: S' );
define( 'SECURE_AUTH_KEY',  'fZO~Drg]YQYam,,`ldX&r{R: C`=>mBn-=Q{[PQH;OS-[X_*:&k:@24u3h`(<O,9' );
define( 'LOGGED_IN_KEY',    '2~Y:0Fy_(l}v(j8+Vg&2peLMO:z^l<uCw?;+25~uq,$lK-a;dfZ.?X7bkvp{^Kkb' );
define( 'NONCE_KEY',        '(=4?Ky920J`K(X+f*oE}),T/NiC%dBd;}|%%,KI}>5lnQ>Q%A]g9)fZkg2&bM<rh' );
define( 'AUTH_SALT',        '-8p?W*u5IA7[N_e`.xz4J&C7wTn3KyNWKc^rP}&NB==Y3(9%`otZe30f3Z9y(M8W' );
define( 'SECURE_AUTH_SALT', '3vPFQed@x46$%~,_Rev8oDVtl&XV1wkSI&0ez3Qz96iX4lwU2L,nr/k:`1Z5An6G' );
define( 'LOGGED_IN_SALT',   'm-o8B lEA>CCr$bl*T(`M]{=7JszdXD06 ,Ea=JU]]aDXAY7#4^/T6EGQ$UyIa#n' );
define( 'NONCE_SALT',       '@o&LHp-X5Mbv^45{ofyWQ!l},}=E}Qi}>U7L)&^Zv+x-D)TbL uUnZ(M{Ptkkbt+' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
