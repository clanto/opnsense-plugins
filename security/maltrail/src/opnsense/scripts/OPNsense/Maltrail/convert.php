#!/usr/local/bin/php
<?php

require_once("config.inc");
require_once("legacy_bindings.inc");

use OPNsense\Core\Config;

// traverse Maltrail old general to new sensor and server sections
$configObj = Config::getInstance()->object();
if (isset($configObj->OPNsense->Maltrail->general)) {
    foreach ($configObj->OPNsense->Maltrail->general->children() as $gen) {
        $heuristics = (string)$configObj->OPNsense->Maltrail->sensor->id;
		$checkhostheader = (string)$configObj->OPNsense->Maltrail->sensor->->id;
		$updateperiod = (string)$configObj->OPNsense->Maltrail->sensor->->id;
		$adminpassword = (string)$configObj->OPNsense->Maltrail->server->->id;
		$monitorinterface = (string)$configObj->OPNsense->Maltrail->sensor->->id;
		$whitelist = (string)$configObj->OPNsense->Maltrail->sensor->->id;
    }
}