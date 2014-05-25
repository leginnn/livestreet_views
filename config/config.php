<?php
/**
 * Views - сортировка топиков по числу просмотров
 *
 * Версия:	1.0.0
 * Автор:	Александр Вереник
 * Профиль:	http://livestreet.ru/profile/Wasja/
 * GitHub:	https://github.com/wasja1982/livestreet_views
 *
 **/

$config = array();

// Использовать сортировку топиков по числу просмотров
$config['use_sort'] = true;

// Отображаются только топики, которые просматривались в выбранный период, независимо от времени их создания.
// Использует данные плагина Viewstat (должен быть установлен). По умолчанию отключено (false).
$config['stat_date_filter'] = false;

// Показывать число просмотров в панели информации топика
$config['show_info'] = true;

Config::Set('db.table.topic_view', '___db.table.prefix___topic_view');

return $config;
?>