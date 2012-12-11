<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'memoranda');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l{18]7B<Z,|Qbeg!)klZUy8lz9 !9JM`_Qr,RvXe]Nruykqg H#hp /!p3%`iT::');
define('SECURE_AUTH_KEY',  '~4?M0hS/8{H}IFL;Wl^VFVFba58<BAS|K^aw%S8`>xBU9UaS;dB=(1F/C8Lo%f|H');
define('LOGGED_IN_KEY',    'mmu!hBMuFoUZbLc/}n&%ic4;PX5c05FJQFW]7&tpgt]<)yXy2?q%4C~]y+|h9D+|');
define('NONCE_KEY',        '|kJ}*yz/Q*Zg;G=xtH;o!/n0HB&5E@H!_}a4Tp|,4(T]_Zs& P[}+/k#Ms_.h$JW');
define('AUTH_SALT',        'uTzACPaynTXWa7gUAW^ez@H~,jQg?_BU%cd*-^`]RTuT,pvxsdJQ=oTbw+$0`Cf9');
define('SECURE_AUTH_SALT', '(JTgaEwNVlL)S4#$=6Z`Ak`GXQ/w]?.uq1MXpbQ/H=t]m#:uA{K)mml}tc]D=k b');
define('LOGGED_IN_SALT',   'z@#>e$3(|g^2_jj <DOtH#0ktJ->b=4} Xwk-F`ZK1,5dJ@ct7$(KhqulV^+zW6t');
define('NONCE_SALT',       'KG?RH$pj=Vb;R, ?9d#fR|A~~/|uV5R<8[R(Y:T.Z&D.qX`SY8v(H]$}E~kML&nv');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
