<?php
/*
	LiveStreet plugin "Citaty" v0.2
	
	Copyright 2012, Viruskin Kicha
	licensed under the GNU GPL v3
	http://www.gnu.org/licenses/gpl.html

*/

class PluginCitaty_ModuleCitaty extends Module {

	protected $oMapper;

	public function Init() {
		$this->oMapper=Engine::GetMapper(__CLASS__);
	}

	public function GetCitaty() {
		$data=$this->oMapper->getRandom();
		return $data;
	}

	public function Select() {
		return $this->oMapper->Select();
	}

	public function Insert($text) {
		return $this->oMapper->Insert($text);
	}

	public function Delete($cit_id) {
		return $this->oMapper->Delete($cit_id);
	}
	
	public function Truncate() {
		return $this->oMapper->Truncate();
	}

	public function ExportShortiki() {
		$json = file_get_contents("http://shortiki.com/export/api.php?format=json&type=".Config::Get('plugin.citaty.shortiki.type')."&amount=".Config::Get('plugin.citaty.shortiki.amount'));
		$arr = json_decode($json,true);
		foreach($arr as $item){
			$shorts[] = $item['content'];
		}
		return $this->oMapper->Inserts($shorts);
	}
}