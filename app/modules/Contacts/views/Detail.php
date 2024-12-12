<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Contacts_Detail_View extends Accounts_Detail_View {

	function __construct() {
		parent::__construct();
		$this->exposeMethod('contactList');
	}

	public function contactList(Vtiger_Request $request){
		global $adb;

		$query = "SELECT * FROM vtiger_ws_mycontracts";
		$result = $adb->pquery($query, []);

		$contacts = [];
		if ($adb->num_rows($result) > 0) {
				while ($row = $adb->fetch_array($result)) {
						$contacts[] = [
								'firstname' => $row['firstname'],
								'lastname' => $row['lastname'],
								'address' => $row['address'],
								'location' => $row['location']
						];
				}
		}

		echo "Contact List<br>";
		echo "Show custom module contacts<br>";
		echo "Mehtab code.<br>";
		echo "This is new procurement module...<br>";
		echo "This is legal claims module<br>";
		echo "New feature by IT team.<br>";
		echo "<pre>"; print_r($contacts);exit;
	}


	public function showModuleDetailView(Vtiger_Request $request) {
		$recordId = $request->get('record');
		$moduleName = $request->getModule();

		// Getting model to reuse it in parent 
		if (!$this->record) {
			$this->record = Vtiger_DetailView_Model::getInstance($moduleName, $recordId);
		}
		$recordModel = $this->record->getRecord();
		$viewer = $this->getViewer($request);
		$viewer->assign('IMAGE_DETAILS', $recordModel->getImageDetails());

		return parent::showModuleDetailView($request);
	}
}
