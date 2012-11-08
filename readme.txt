/*
	LiveStreet plugin "Citaty" v0.2
	
	Copyright 2012, Viruskin Kicha
	licensed under the GNU GPL v3
	http://www.gnu.org/licenses/gpl.html

*/

1. Установка Плагина
1.1 Разархивируйте архив в папку {$_SERVER['DOCUMENT_ROOT']}/plugins/
1.2 Под админом зайдите в панель админа по адресу http://{$_SERVER['HTTP_HOST']}/admin/
1.3 Активируйте плагин "Citaty"
1.4 Зайдите в панель настроек плагина http://{$_SERVER['HTTP_HOST']}/citaty/admin/
1.5 Там добавляете цитаты или удаляете
1.6 Чтобы показать на сайте цитаты необходимо добавить хук на смарти шаблон: {hook run='hook_citaty'}
1.7 Или же через аякс можете дергать цитаты с адреса http://{$_SERVER['HTTP_HOST']}/citaty/

p.s.: Демо цитаты взяты с моего любимого сайта шуточных цитатников http://shortiki.com/