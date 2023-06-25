#!/usr/local/bin/php
<?php

require_once("config.inc");
require_once("legacy_bindings.inc");

use OPNsense\Core\Config;

// traverse Maltrail old general to new sensor and server sections
$configObj = Config::getInstance()->object();
$configObj->OPNsense->Maltrail->general->heuristics = (string)$configObj->OPNsense->Maltrail->sensor->id;
$configObj->OPNsense->Maltrail->general->checkhostheader = (string)$configObj->OPNsense->Maltrail->sensor->->id;
$configObj->OPNsense->Maltrail->general->updateperiod = (string)$configObj->OPNsense->Maltrail->sensor->->id;
$configObj->OPNsense->Maltrail->general->adminpassword = (string)$configObj->OPNsense->Maltrail->server->->id;
$configObj->OPNsense->Maltrail->general->monitorinterface = (string)$configObj->OPNsense->Maltrail->sensor->->id;
$configObj->OPNsense->Maltrail->general->whitelist = (string)$configObj->OPNsense->Maltrail->sensor->->id;