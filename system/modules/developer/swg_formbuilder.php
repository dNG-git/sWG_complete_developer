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
* developer/swg_formbuilder.php
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

if (!isset ($direct_settings['serviceicon_default_back'])) { $direct_settings['serviceicon_default_back'] = "mini_default_back.png"; }
$direct_settings['additional_copyright'][] = array ("Module basic #echo(sWGbasicVersion)# - (C) ","http://www.direct-netware.de/redirect.php?swg","direct Netware Group"," - All rights reserved");

if ($direct_settings['a'] == "index") { $direct_settings['a'] = "view"; }
//j// BOS
switch ($direct_settings['a'])
{
//j// $direct_settings['a'] == "view"
case "view":
{
	if (USE_debug_reporting) { direct_debug (1,"sWG/#echo(__FILEPATH__)# _a=view_ (#echo(__LINE__)#)"); }

	$direct_cachedata['page_this'] = "m=developer;s=formbuilder";
	$direct_cachedata['page_backlink'] = "m=developer;a=services";
	$direct_cachedata['page_homelink'] = "m=developer;a=services";

	if ($direct_globals['kernel']->serviceInitDefault ())
	{
	//j// BOA
	$direct_globals['output']->relatedManager ("developer_formbuilder_view","pre_module_service_action");
	$direct_globals['basic_functions']->requireClass ('dNG\sWG\directFormbuilder');
	direct_local_integration ("developer");

	direct_class_init ("formbuilder");
	direct_class_init ("output_formbuilder");
	$direct_globals['output']->optionsInsert (1,"servicemenu","m=developer&a=services",(direct_local_get ("core_back")),$direct_settings['serviceicon_default_back'],"url0");

$g_form_element_array = array (
"type" => "",
"name" => 0,
"title" => 0,
"required" => false,
"size" => "m",
"helper_text" => "",
"helper_url" => direct_linker ("url0","m=developer;s=formbuilder"),
"helper_closing" => false,
"content" => ""
);

	$direct_cachedata['output_formelements'] = array ();
	$g_form_element_count = 0;

	foreach ($direct_globals['output_formbuilder']->functions as $g_method => $g_method_available)
	{
		if (($g_method_available)&&(preg_match ("#^entryAdd(.+?)$#",$g_method,$g_result_array)))
		{
			$g_form_element_count++;

			$g_form_element_array['type'] = $g_result_array[1];
			$g_form_element_array['name'] = "swgf".$g_form_element_count;
			$g_form_element_array['title'] = (direct_local_get ("developer_formbuilder_element_1")).$g_form_element_count.(direct_local_get ("developer_formbuilder_element_2"));
			$g_form_element_array['helper_text'] = "entryAdd".$g_method;

			$direct_cachedata['output_formelements'][] = $g_form_element_array;
		}
	}

	$direct_cachedata['output_formbutton'] = direct_local_get ("core_continue");
	$direct_cachedata['output_formtarget'] = "m=developer;s=formbuilder";
	$direct_cachedata['output_formtitle'] = direct_local_get ("developer_formbuilder");

	$direct_globals['output']->header (false,true,$direct_settings['p3p_url'],$direct_settings['p3p_cp']);
	$direct_globals['output']->relatedManager ("developer_formbuilder_view","post_module_service_action");
	$direct_globals['output']->oset ("default","form");
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