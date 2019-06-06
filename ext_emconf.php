<?php

/**
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

$EM_CONF[$_EXTKEY] = [
	'title' => 'AWS SDK for PHP',
	'description' => 'Amazon Web Services (AWS) SDK for PHP, which enables developers to access almost all AWS services programmatically by API calls. This includes starting/stopping EC2 instances, read/write access to objects in S3, changing DNS records in Route 53, etc.',
	'category' => 'module',
	'version' => '3.99.0',
	'state' => 'stable',
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Michael Schams (schams.net)',
	'author_email' => 'schams.net',
	'author_company' => 'https://schams.net',
	'constraints' => [
		'depends' => [
			'php' => '5.5.0-7.2.99',
			'typo3' => '7.0.0-9.5.99',
		],
		'conflicts' => [
		],
		'suggests' => [
		]
	]
];
