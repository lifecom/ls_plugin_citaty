<?

$config=array();

// Настройка экспорта с http://shortiki.com/
// Количество записей
$config['shortiki']['amount'] = 10;
// Тип выбираемых записей "index" - по дате, "top" - по рейтингу, "random" - случайный
$config['shortiki']['type'] = 'random';

$config['table']['citaty']                = '___db.table.prefix___citaty';

//Устанавливаем роутер, т.е. привязываем путь /citaty к нашему экшену
Config::Set('router.page.citaty', 'PluginCitaty_ActionCitaty');

return $config;