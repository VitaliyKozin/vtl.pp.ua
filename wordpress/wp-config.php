<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'u489640296_base');

/** Имя пользователя MySQL */
define('DB_USER', 'u489640296_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234567');

/** Имя сервера MySQL */
define('DB_HOST', 'mysql.hostinger.com.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.*8M{;aQ(2v#3^8I0&[WKXgkgrb<d1+=g$~q&Dpb,K@L{d.gdR|xllaN(R<A>%CD');
define('SECURE_AUTH_KEY',  '@7/#Q#t%a/R#~#pA|%nE8p~cN?huD--O@MY56L}+Ee1=`S~y(q.wj,ajVj9KvAn]');
define('LOGGED_IN_KEY',    'BxsJvGtSMDJEnn-;<~;iLQBc&th8qtQ~-v3QK-Q8b#>,KXOZiI/2h+*-b|$f._wR');
define('NONCE_KEY',        '>8ZN:E=H6FOCu(wgbKc>QX2>T{ZmN#e}Y^/^DXLTZCpy@ez%slSY=/{ptdj@0 [7');
define('AUTH_SALT',        'j-G(XK ;U{tD6PC@D I|^J3Pj2%L9M|sp<Cmf/B~k8_Ex3)Ya)r-m/s`H$*YMbR?');
define('SECURE_AUTH_SALT', 'YwVv:]P}b-`oXe=%Kf]=K^6BvpQj?K80|66M+t0O#u&x-.R$7Qnu~hk{}ceBDh,s');
define('LOGGED_IN_SALT',   'w%y=1a.DZ_|KPCBCV3eDt.8I|oi<7A5-+$Zr||}G,Epz[F!dF*9n]#}V@)&RaL.J');
define('NONCE_SALT',       '^Ua`0g(,%#64lwHDPb}q+ruGHVv(|Q=0[#wx^x0pYV4!v4&4B,_+jVo/xh0f=Kfj');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
