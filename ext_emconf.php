<?php

/**
 * AWS SDK for PHP Version 3
 * SDK by Amazon Web Services, Inc. (licensed under the Apache-2.0 license)
 * TYPO3 extension by Michael Schams | https://schams.net | https://t3rrific.com
 *
 * See https://aws.amazon.com/sdk-for-php/ for details including the license.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'AWS SDK for PHP',
    'description' => 'Amazon Web Services (AWS) SDK for PHP. See https://aws.amazon.com/sdk-for-php/ for details.',
    'category' => 'misc',
    'version' => '3.300.0',
    'state' => 'stable',
    'author' => 'Michael Schams (schams.net)',
    'author_company' => 'https://schams.net',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.999',
            'php' => '8.1.0-8.3.999'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ]
    ]
];
