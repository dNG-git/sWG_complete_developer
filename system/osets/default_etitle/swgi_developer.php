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
* osets/default/swgi_developer.php
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

//j// Functions and classes

/**
* direct_oset_developer_input_result ()
*
* @return string Valid XHTML code
* @since  v0.1.00
*/
function direct_oset_developer_input_result ()
{
	global $direct_cachedata,$direct_settings;
	if (USE_debug_reporting) { direct_debug (5,"sWG/#echo(__FILEPATH__)# -direct_oset_developer_input_result ()- (#echo(__LINE__)#)"); }

	if ($direct_cachedata['output_input_result'])
	{
return ("<h1 class='pagecontenttitle{$direct_settings['theme_css_corners']}'>".(direct_local_get ("developer_input_result"))."</h1>
<p class='pageborder2{$direct_settings['theme_css_corners']} pageextracontent'>{$direct_cachedata['output_input_result']}</p>");
	}
	else { return ""; }
}

/**
* direct_oset_developer_input_result_sourcecode ()
*
* @return string Valid XHTML code
* @since  v0.1.00
*/
function direct_oset_developer_input_result_sourcecode ()
{
	global $direct_cachedata,$direct_settings;
	if (USE_debug_reporting) { direct_debug (5,"sWG/#echo(__FILEPATH__)# -direct_oset_developer_input_result_sourcecode ()- (#echo(__LINE__)#)"); }

	if ($direct_cachedata['output_input_result'])
	{
return ("<h1 class='pagecontenttitle{$direct_settings['theme_css_corners']}'>".(direct_local_get ("developer_input_result"))."</h1>
<p class='pageborder2{$direct_settings['theme_css_corners']} pageextracontent' style='overflow:auto;white-space:pre;font-family:\"Courier New\",Courier,mono'>{$direct_cachedata['output_input_result']}</p>");
	}
	else { return ""; }
}

/**
* direct_oset_developer_sqlsource_decode ()
*
* @return string Valid XHTML code
* @since  v0.1.00
*/
function direct_oset_developer_sqlsource_decode ()
{
	global $direct_cachedata,$direct_settings;
	if (USE_debug_reporting) { direct_debug (5,"sWG/#echo(__FILEPATH__)# -direct_oset_developer_sqlsource_decode ()- (#echo(__LINE__)#)"); }

	if ($direct_cachedata['output_sql_result'])
	{
return ("<h1 class='pagecontenttitle{$direct_settings['theme_css_corners']}'>".(direct_local_get ("developer_sqlsource_decode_result"))."</h1>
<p class='pageborder2{$direct_settings['theme_css_corners']} pageextracontent' style='overflow:auto;white-space:pre;font-family:\"Courier New\",Courier,mono'>{$direct_cachedata['output_sql_source']}</p>
<p class='pageborder2{$direct_settings['theme_css_corners']} pageextracontent' style='overflow:auto;white-space:pre;font-family:\"Courier New\",Courier,mono'>{$direct_cachedata['output_sql_result']}</p>");
	}
	else { return ""; }
}

//j// Script specific commands

$direct_settings['theme_css_corners'] = (isset ($direct_settings['theme_css_corners_class']) ? " ".$direct_settings['theme_css_corners_class'] : " ui-corner-all");

//j// EOF
?>