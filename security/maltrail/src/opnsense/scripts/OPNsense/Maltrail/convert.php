#!/usr/local/bin/php
<?php

require_once("config.inc");
require_once("legacy_bindings.inc");

use OPNsense\Core\Config;

// traverse Maltrail old general to new sensor and server sections
$configObj = Config::getInstance()->object();
$configObj->OPNsense->maltrail->sensor->heuristics = (string)$configObj->OPNsense->maltrail->general->heuristics;
$configObj->OPNsense->maltrail->sensor->checkhostheader = (string)$configObj->OPNsense->maltrail->general->checkhostheader;
$configObj->OPNsense->maltrail->sensor->updateperiod = (string)$configObj->OPNsense->maltrail->general->updateperiod;
$configObj->OPNsense->maltrail->server->adminpassword = (string)$configObj->OPNsense->maltrail->general->adminpassword;
$configObj->OPNsense->maltrail->sensor->monitorinterface = (string)$configObj->OPNsense->maltrail->general->monitorinterface;
$configObj->OPNsense->maltrail->sensor->whitelist = (string)$configObj->OPNsense->maltrail->general->whitelist;