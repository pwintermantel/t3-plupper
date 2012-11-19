<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Plupper',
	array(
		'Plupper' => 'status, error',
		
	),
	// non-cacheable actions
	array(
		'Plupper' => 'status',
		
	)
);

