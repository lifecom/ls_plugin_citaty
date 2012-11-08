<?php
/*
	LiveStreet plugin "Citaty" v0.2
	
	Copyright 2012, Viruskin Kicha
	licensed under the GNU GPL v3
	http://www.gnu.org/licenses/gpl.html

*/

class PluginCitaty_ActionCitaty extends ActionPlugin  {

	public function Init() {
		$this->SetDefaultEvent('index');
	}

	protected function RegisterEvent() {
		$this->AddEvent('index','EventIndex');
		$this->AddEvent('admin','EventAdmin');

		$this->AddEvent('lists','SelectsCitaty');
		$this->AddEvent('add','AddCitaty');
		$this->AddEvent('delete','DeleteCitaty');
		$this->AddEvent('truncate','TruncateCitaty');
		$this->AddEvent('export','ExportCitaty');
	}

	protected function EventIndex(){
		$citaty = $this->PluginCitaty_citaty_getCitaty();
		$this->Viewer_Assign('citaty',$citaty);
	}
	
	protected function EventAdmin(){
		if(!$this->User_IsAuthorization() or !$oUserCurrent=$this->User_GetUserCurrent() or !$oUserCurrent->isAdministrator()) {
			return parent::EventNotFound();
		}
		$lists = $this->PluginCitaty_citaty_Select();
		$this->Viewer_Assign('lists',$lists);
	}
	
	protected function SelectsCitaty(){
		$lists = $this->PluginCitaty_citaty_Select();
		$this->Viewer_Assign('lists',$lists);
	}

	protected function AddCitaty(){
		if(!$this->User_IsAuthorization() or !$oUserCurrent=$this->User_GetUserCurrent() or !$oUserCurrent->isAdministrator()) {
			return parent::EventNotFound();
		}
		$this->Security_ValidateSendForm();
		$this->SetTemplate(false);
		$text = getRequest('text');
		$this->PluginCitaty_citaty_Insert($text);
		Router::Location($_SERVER['HTTP_REFERER']);
	}
	
	protected function DeleteCitaty(){
		if(!$this->User_IsAuthorization() or !$oUserCurrent=$this->User_GetUserCurrent() or !$oUserCurrent->isAdministrator()) {
			return parent::EventNotFound();
		}
		$this->Security_ValidateSendForm();
		$this->SetTemplate(false);
		$cit_id = getRequest('cit_id');
		$this->PluginCitaty_citaty_Delete($cit_id);
		Router::Location($_SERVER['HTTP_REFERER']);
	}

	protected function TruncateCitaty(){
		if(!$this->User_IsAuthorization() or !$oUserCurrent=$this->User_GetUserCurrent() or !$oUserCurrent->isAdministrator()) {
			return parent::EventNotFound();
		}
		$this->PluginCitaty_citaty_Truncate();
		Router::Location($_SERVER['HTTP_REFERER']);
	}

	protected function ExportCitaty(){
		if(!$this->User_IsAuthorization() or !$oUserCurrent=$this->User_GetUserCurrent() or !$oUserCurrent->isAdministrator()) {
			return parent::EventNotFound();
		}
		switch(getRequest('from')){
			case "shortiki":
				$this->PluginCitaty_citaty_ExportShortiki();
				break;
			//case "rss":
		}
		Router::Location($_SERVER['HTTP_REFERER']);
	}
}