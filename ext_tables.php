<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Plupper',
	'Plupper'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Main', 'Plupper Main Config');
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Js', 'Plupper JavaScript');

?>
