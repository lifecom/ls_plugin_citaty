<?php
/*
	LiveStreet plugin "Citaty" v0.2
	
	Copyright 2012, Viruskin Kicha
	licensed under the GNU GPL v3
	http://www.gnu.org/licenses/gpl.html

*/

class PluginCitaty_HookCitaty extends Hook {

	public function RegisterHook () {
		$this -> AddHook ('template_hook_citaty', 'runcitaty');
	}

	public function RunCitaty () {
		return $this->PluginCitaty_citaty_getCitaty();
	}
}