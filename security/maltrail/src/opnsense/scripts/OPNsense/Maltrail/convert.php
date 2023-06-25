#!/usr/local/bin/php
<?php

require_once("config.inc");
require_once("legacy_bindings.inc");

use OPNsense\Core\Config;

// traverse Maltrail old general to new sensor and server sections
$configObj = Config::getInstance()->object();
$configObj->OPNsense->Maltrail->sensor->heuristics = (string)$configObj->OPNsense->Maltrail->general->heuristics;
$configObj->OPNsense->Maltrail->sensor->checkhostheader = (string)$configObj->OPNsense->Maltrail->general->checkhostheader;
$configObj->OPNsense->Maltrail->sensor->updateperiod = (string)$configObj->OPNsense->Maltrail->general->updateperiod;
$configObj->OPNsense->Maltrail->server->adminpassword = (string)$configObj->OPNsense->Maltrail->general->adminpassword;
$configObj->OPNsense->Maltrail->sensor->monitorinterface = (string)$configObj->OPNsense->Maltrail->general->monitorinterface;
$configObj->OPNsense->Maltrail->sensor->whitelist = (string)$configObj->OPNsense->Maltrail->general->whitelist;