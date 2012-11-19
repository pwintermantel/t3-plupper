<?php

########################################################################
# Extension Manager/Repository config file for ext "plupper".
#
# Auto generated 19-11-2012 11:09
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Plupper Status',
	'description' => 'Displays the Plupper Status',
	'category' => 'plugin',
	'author' => 'Philipp Wintermantel',
	'author_email' => 'phil@404art.com',
	'author_company' => 'WWD',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.2',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.5',
			'fluid' => '1.5',
			'typo3' => '4.7-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:18:{s:21:"ExtensionBuilder.json";s:4:"a7c1";s:10:"Readme.rst";s:4:"f676";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"7cff";s:14:"ext_tables.php";s:4:"2b5e";s:14:"ext_tables.sql";s:4:"d41d";s:40:"Classes/Controller/PlupperController.php";s:4:"6c25";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"9d96";s:38:"Configuration/TypoScript/constants.txt";s:4:"4c48";s:34:"Configuration/TypoScript/setup.txt";s:4:"2cc4";s:40:"Resources/Private/Language/locallang.xlf";s:4:"9f7f";s:40:"Resources/Private/Language/locallang.xml";s:4:"91ac";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"9f7f";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"f166";s:46:"Resources/Private/Templates/Plupper/error.html";s:4:"7e2c";s:47:"Resources/Private/Templates/Plupper/status.html";s:4:"28ab";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>