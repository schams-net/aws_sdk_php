<?php

/*
 * This file is part of the TYPO3 CMS Extension "AWS SDK for PHP"
 * Extension author: Michael Schams - https://schams.net
 *
 * The AWS SDK for PHP is copyright Amazon.com, Inc. or its affiliates.
 *
 * For copyright and license information, please read the LICENSE.txt
 * file distributed with this source code. For copyright and license
 * information of all AWS SDK for PHP sources and its 3rd party
 * components, please read the license files in the "Contrib" folder
 * and its sub-folders.
 */

use \TYPO3\CMS\Core\Utility\GeneralUtility;

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Prevent that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {

	$include = array(
		// include AWS SDK for PHP
		GeneralUtility::getFileAbsFileName('EXT:' . $_EXTKEY . DIRECTORY_SEPARATOR . 'Contrib' . DIRECTORY_SEPARATOR . 'aws-autoloader.php'),
		// include class SchamsNet\AwsSdkPhp\AwsService
		GeneralUtility::getFileAbsFileName('EXT:' . $_EXTKEY . DIRECTORY_SEPARATOR . 'Classes' . DIRECTORY_SEPARATOR . 'AwsService.php'),
	);

	foreach($include as $filename) {
		if(is_readable($filename)) {
			require_once $filename;
		}
		else {
			// *TODO* implement proper exception handling
		}
	}
}
