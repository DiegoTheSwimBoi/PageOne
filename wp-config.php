<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'PageOne' );

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
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L!KyzI]9r#U]A[oSmQ*j*A+Y/dZC(:&2J${$/jK9>rfYD:)T=Od(8bru_x{^ew/m' );
define( 'SECURE_AUTH_KEY',  '!1(F8TOtMK81v1c;+Y@yXghONWF1.?PP4%9~~f?;?by_XL 0{`3*TG(c[#qWVL4<' );
define( 'LOGGED_IN_KEY',    '>0*a>gj;QVJ2GszATvca7,3#VUS3Jfz:+^rLP;11D %#KRxbi))Zwf^. ={E7`Z;' );
define( 'NONCE_KEY',        'V8IDcsI@[e84-!Iwh9C(Cg|GqDFW2uSXos0P>G~h%~A1Tz=S40J)VocvZ/MS/<,s' );
define( 'AUTH_SALT',        'CGCsbMTli/(PkGJ*R/.+#k-H)>ZAmW%:.Ss!rPDn[X69>V(a,}Me-Z8:j,2Q~n4E' );
define( 'SECURE_AUTH_SALT', '~Z8o0j6<_%8?KrX$r,}cwvSFBSJu`_xW&0@D}9WTfMRLg!9AHb5:g4gl&s9LE0t/' );
define( 'LOGGED_IN_SALT',   'RO/m%+[7R2u`LXYgE**f)UNU%ekD&]e!uxDF7tRur%|^T#U1yh+g]j_7{)#P&M5.' );
define( 'NONCE_SALT',       '2Zh7Koc3@xZmM`*ydv9BGai},x pth:C)O8L-X=eF:IG&s!;~-j_j)n.LpL_, i:' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
