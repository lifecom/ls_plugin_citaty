<?

$config=array();

// ��������� �������� � http://shortiki.com/
// ���������� �������
$config['shortiki']['amount'] = 10;
// ��� ���������� ������� "index" - �� ����, "top" - �� ��������, "random" - ���������
$config['shortiki']['type'] = 'random';

$config['table']['citaty']                = '___db.table.prefix___citaty';

//������������� ������, �.�. ����������� ���� /citaty � ������ ������
Config::Set('router.page.citaty', 'PluginCitaty_ActionCitaty');

return $config;