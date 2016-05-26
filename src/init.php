<?php
/**
 * Инициализация
 *
 * обьявление путей
 * обьявление констант
 * создание объектов
 *
 */


// Корневая папка скрипта
defined('SCRIPT_ROOT')? null : define('SCRIPT_ROOT', dirname(dirname(__FILE__)));

// Основные ресурсы скрипта
defined('SCRIPT_SRC')? null : define('SCRIPT_SRC', SCRIPT_ROOT ."/src");

// Папка с классами
defined('SCRIPT_CLASSES')? null : define('SCRIPT_CLASSES', SCRIPT_SRC ."/class");

// Папка с основными рабочими файлами
defined('SCRIPT_OPERATIONS')? null : define('SCRIPT_OPERATIONS', SCRIPT_SRC ."/operation");

// Папка с шаблонами
defined('SCRIPT_TMP')? null : define('SCRIPT_TMP', SCRIPT_SRC ."/templates");




// Основные рабочие функции
require_once(SCRIPT_OPERATIONS ."/functions.php");

// Переменные скрипта
require_once(SCRIPT_OPERATIONS ."/variables.php");

// Рабочий класс скрипта
require_once(SCRIPT_CLASSES ."/mkws.php");




$mkws = new mkws();


$mkws->set_work_root($WS_work_root);
$mkws->set_sys_root($WS_site_root);
$mkws->set_backup_root($WS_backup_root);

$mkws->set_available_sites($lock_sites);


