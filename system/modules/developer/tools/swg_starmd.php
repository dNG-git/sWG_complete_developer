<?php
//j// BOF

/*n// NOTE
----------------------------------------------------------------------------
secured WebGine
net-based application engine
----------------------------------------------------------------------------
(C) direct Netware Group - All rights reserved
http://www.direct-netware.de/redirect.php?swg

This Source Code Form is subject to the terms of the Mozilla Public License,
v. 2.0. If a copy of the MPL was not distributed with this file, You can
obtain one at http://mozilla.org/MPL/2.0/.
----------------------------------------------------------------------------
http://www.direct-netware.de/redirect.php?licenses;mpl2
----------------------------------------------------------------------------
#echo(sWGbasicVersion)#
sWG/#echo(__FILEPATH__)#
----------------------------------------------------------------------------
NOTE_END //n*/
/**
* developer/tools/swg_starmd.php
*
* @internal   We are using phpDocumentor to automate the documentation process
*             for creating the Developer's Manual. All sections including
*             these special comments will be removed from the release source
*             code.
*             Use the following line to ensure 76 character sizes:
* ----------------------------------------------------------------------------
* @author     direct Netware Group
* @copyright  (C) direct Netware Group - All rights reserved
* @package    sWG_complete
* @subpackage developer
* @since      v0.1.00
* @license    http://www.direct-netware.de/redirect.php?licenses;mpl2
*             Mozilla Public License, v. 2.0
*/

/* -------------------------------------------------------------------------
All comments will be removed in the "production" packages (they will be in
all development packets)
------------------------------------------------------------------------- */

//j// Basic configuration

/* -------------------------------------------------------------------------
Direct calls will be honored with an "exit ()"
------------------------------------------------------------------------- */

if (!defined ("direct_product_iversion")) { exit (); }

//j// Script specific commands

if (!isset ($direct_settings['account_password_bytemix'])) { $direct_settings['account_password_bytemix'] = ($direct_settings['swg_id'] ^ (strrev ($direct_settings['swg_id']))); }
if (!isset ($direct_settings['account_secid_bytemix'])) { $direct_settings['account_secid_bytemix'] = $direct_settings['account_password_bytemix']; }
if (!isset ($direct_settings['serviceicon_default_back'])) { $direct_settings['serviceicon_default_back'] = "mini_default_back.png"; }
$direct_settings['additional_copyright'][] = array ("Module basic #echo(sWGbasicVersion)# - (C) ","http://www.direct-netware.de/redirect.php?swg","direct Netware Group"," - All rights reserved");

//j// BOS
switch ($direct_settings['a'])
{
//j// $direct_settings['a'] == "md5"
case "md5":
{
	if (USE_debug_reporting) { direct_debug (1,"sWG/#echo(__FILEPATH__)# _a=md5_ (#echo(__LINE__)#)"); }

	$direct_cachedata['page_this'] = "m=developer;a=tools+starmd;a=md5";
	$direct_cachedata['page_backlink'] = "m=developer;a=services";
	$direct_cachedata['page_homelink'] = "m=developer;a=services";

	if ($direct_globals['kernel']->serviceInitDefault ())
	{
	//j// BOA
	$direct_globals['output']->relatedManager ("developer_tools_starmd_md5","pre_module_service_action");
	$direct_globals['basic_functions']->requireClass ('dNG\sWG\directFormbuilder');
	direct_local_integration ("developer");

	direct_class_init ("formbuilder");
	$direct_globals['output']->optionsInsert (1,"servicemenu","m=developer;a=services",(direct_local_get ("core_back")),$direct_settings['serviceicon_default_back'],"url0");

	$direct_cachedata['i_dinput'] = (isset ($GLOBALS['i_dinput']) ? ($direct_globals['basic_functions']->inputfilterBasic ($GLOBALS['i_dinput'])) : "");
	$direct_globals['formbuilder']->entryAddTextarea (array ("name" => "dinput","title" => (direct_local_get ("developer_input")),"min" => 1));

	$direct_cachedata['output_input_result'] = ($direct_cachedata['i_dinput'] ? md5 ($direct_cachedata['i_dinput']) : "");

	$direct_cachedata['output_preview_function_file'] = "swgi_developer";
	$direct_cachedata['output_preview_function'] = "oset_developer_input_result_sourcecode";

	$direct_cachedata['output_formbutton'] = direct_local_get ("core_continue");
	$direct_cachedata['output_formelements'] = $direct_globals['formbuilder']->formGet (true);
	$direct_cachedata['output_formtarget'] = "m=developer;s=tools+starmd;a=md5";
	$direct_cachedata['output_formtitle'] = direct_local_get ("developer_md5_encode");

	$direct_globals['output']->header (false,true,$direct_settings['p3p_url'],$direct_settings['p3p_cp']);
	$direct_globals['output']->relatedManager ("developer_tools_starmd_md5","post_module_service_action");
	$direct_globals['output']->oset ("default","form_preview");
	$direct_globals['output']->outputSend ($direct_cachedata['output_formtitle']);
	//j// EOA
	}

	$direct_cachedata['core_service_activated'] = true;
	break 1;
}
//j// $direct_settings['a'] == "tmd5"
case "tmd5":
{
	if (USE_debug_reporting) { direct_debug (1,"sWG/#echo(__FILEPATH__)# _a=tmd5_ (#echo(__LINE__)#)"); }

	$direct_cachedata['page_this'] = "m=developer;a=tools+starmd;a=tmd5";
	$direct_cachedata['page_backlink'] = "m=developer;a=services";
	$direct_cachedata['page_homelink'] = "m=developer;a=services";

	if ($direct_globals['kernel']->serviceInitDefault ())
	{
	//j// BOA
	$direct_globals['output']->relatedManager ("developer_tools_starmd_tmd5","pre_module_service_action");
	$direct_globals['basic_functions']->requireClass ('dNG\sWG\directFormbuilder');
	direct_local_integration ("developer");

	direct_class_init ("formbuilder");
	$direct_globals['output']->optionsInsert (1,"servicemenu","m=developer;a=services",(direct_local_get ("core_back")),$direct_settings['serviceicon_default_back'],"url0");

	$direct_cachedata['i_dinput'] = (isset ($GLOBALS['i_dinput']) ? ($direct_globals['basic_functions']->inputfilterBasic ($GLOBALS['i_dinput'])) : "");
	$direct_globals['formbuilder']->entryAddTextarea (array ("name" => "dinput","title" => (direct_local_get ("developer_input")),"min" => 1));
	// TODO Select bytemixes

	$direct_cachedata['output_input_result'] = ($direct_cachedata['i_dinput'] ? $direct_globals['basic_functions']->tmd5 ($direct_cachedata['i_dinput']) : "");

	$direct_cachedata['output_preview_function_file'] = "swgi_developer";
	$direct_cachedata['output_preview_function'] = "oset_developer_input_result_sourcecode";

	$direct_cachedata['output_formbutton'] = direct_local_get ("core_continue");
	$direct_cachedata['output_formelements'] = $direct_globals['formbuilder']->formGet (true);
	$direct_cachedata['output_formtarget'] = "m=developer;s=tools+starmd;a=tmd5";
	$direct_cachedata['output_formtitle'] = direct_local_get ("developer_tmd5_encode");

	$direct_globals['output']->header (false,true,$direct_settings['p3p_url'],$direct_settings['p3p_cp']);
	$direct_globals['output']->relatedManager ("developer_tools_starmd_tmd5","post_module_service_action");
	$direct_globals['output']->oset ("default","form_preview");
	$direct_globals['output']->outputSend ($direct_cachedata['output_formtitle']);
	//j// EOA
	}

	$direct_cachedata['core_service_activated'] = true;
	break 1;
}
//j// EOS
}

//j// EOF
?>