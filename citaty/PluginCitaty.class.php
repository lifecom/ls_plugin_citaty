<?php
/*
	LiveStreet plugin "Citaty" v0.2
	
	Copyright 2012, Viruskin Kicha
	licensed under the GNU GPL v3
	http://www.gnu.org/licenses/gpl.html

*/
if (!class_exists('Plugin')) {die('Pizduy');}

class PluginCitaty extends Plugin {

//При активации выполняем вставку дампа в базу
	public function Activate() {
		if (!$this->isTableExists('prefix_citaty')) {
			$this->ExportSQL(dirname(__FILE__).'/dump.sql');
		}
		return true;
	}

	public function Init() {}
}