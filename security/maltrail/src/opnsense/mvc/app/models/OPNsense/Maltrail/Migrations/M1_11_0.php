<?php
/**
 *    Copyright (C) 2017 Frank Wall
 *
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 *
 */

namespace OPNsense\Maltrail\Migrations;

use OPNsense\Base\BaseModelMigration;

class M1_11_0 extends BaseModelMigration
{
    public function post($model)
    {
	$configObj = Config::getInstance()->object();
	$general = $configObj->OPNsense->maltrail->general;
	$sensor = $configObj->OPNsense->maltrail->sensor;
	$server = $configObj->OPNsense->maltrail->server;
	unset($sensor->heuristics);
	unset($server->adminpassword);
	$sensor->heuristics = $general->heuristics;
	$sensor->checkhostheader = $general->checkhostheader;
	$sensor->updateperiod = $general->updateperiod;
	$server->adminpassword = $general->adminpassword;
	$sensor->monitorinterface = $general->monitorinterface;
	$sensor->whitelist = $general->whitelist;
	Config::getInstance()->save();
	}
}