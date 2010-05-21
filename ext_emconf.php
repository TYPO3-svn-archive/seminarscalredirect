<?php

########################################################################
# Extension Manager/Repository config file for ext "seminarscalredirect".
#
# Auto generated 21-05-2010 11:19
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'seminars/cal redirect',
	'description' => 'This extension creates a redirect from cal to onetimeaccount/seminars.',
	'category' => 'plugin',
	'author' => 'Oliver Klee',
	'author_email' => 'typo3-coding@oliverklee.de',
	'shy' => '',
	'dependencies' => 'cal,cal_ts_service,oelib,onetimeaccount,seminars',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'cal' => '',
			'cal_ts_service' => '',
			'oelib' => '',
			'onetimeaccount' => '',
			'seminars' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:9:{s:9:"ChangeLog";s:4:"ac59";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"6cde";s:14:"ext_tables.php";s:4:"885a";s:16:"locallang_db.xml";s:4:"ae32";s:19:"doc/wizard_form.dat";s:4:"b18a";s:20:"doc/wizard_form.html";s:4:"7736";s:40:"pi1/class.tx_seminarscalredirect_pi1.php";s:4:"179f";s:17:"pi1/locallang.xml";s:4:"54f9";}',
);

?>