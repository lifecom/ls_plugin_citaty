<?php
/*
	LiveStreet plugin "Citaty" v0.2
	
	Copyright 2012, Viruskin Kicha
	licensed under the GNU GPL v3
	http://www.gnu.org/licenses/gpl.html

*/

class PluginCitaty_ModuleCitaty_MapperCitaty extends Mapper {

	public function GetRandom() {
		$row_count = $this->oDb->selectrow("SELECT COUNT(*) as count FROM ".Config::Get('plugin.citaty.table.citaty'));
		$sql = "SELECT 
					*
				FROM 
					`".Config::Get('plugin.citaty.table.citaty')."`
				LIMIT ".rand(0,$row_count['count']).",1 ";
		if ($aRow=$this->oDb->selectrow($sql)) {
			return $aRow['text'];
		}
		return 0;
	}

	public function Select() {
		$sql = "SELECT	
					*
				FROM
					`".Config::Get('plugin.citaty.table.citaty')."`
				";
		if ($aRows=$this->oDb->select($sql)) {
			return $aRows;
		}
		return FALSE;
	}

	public function Insert($text) {
		$sql = "REPLACE INTO `".Config::Get('plugin.citaty.table.citaty')."`
					(text)
				VALUES
					(?)
				";
		if ($this->oDb->query($sql,$text)){
			return TRUE;
		}
		return FALSE;
	}
	public function Inserts($arr) {
		foreach ($arr as $text){
			$sql = "REPLACE INTO `".Config::Get('plugin.citaty.table.citaty')."`
						(text)
					VALUES
						(?);
					";
			$this->oDb->query($sql,$text);
		}
		return TRUE;
	}

	public function Delete($cit_id) {
		$sql = "DELETE FROM `".Config::Get('plugin.citaty.table.citaty')."`
				WHERE
					`id`=?
				";
		if ($this->oDb->query($sql,$cit_id)){
			return TRUE;
		}
		return FALSE;
	}
	
	public function Truncate() {
		$sql = "TRUNCATE `".Config::Get('plugin.citaty.table.citaty')."`";
		if ($this->oDb->query($sql)){
			return TRUE;
		}
		return FALSE;
	}
}