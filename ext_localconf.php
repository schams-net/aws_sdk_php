<?php
declare(strict_types=1);

/**
 * AWS SDK for PHP Version 3
 * SDK by Amazon Web Services, Inc. (licensed under the Apache-2.0 license)
 * TYPO3 extension by Michael Schams | https://schams.net | https://t3rrific.com
 *
 * See https://aws.amazon.com/sdk-for-php/ for details including the license.
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

if(!class_exists('Aws\AwsClient')) {
    require_once(ExtensionManagementUtility::extPath("aws_sdk_php") . 'Resources/Private/Libraries/vendor/autoload.php');
}
