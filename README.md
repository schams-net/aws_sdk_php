# TYPO3 Extension: AWS SDK for PHP

The **AWS SDK for PHP** makes it easy for developers to access Amazon Web Services in their PHP code, and build robust applications and software using services in the AWS cloud.

The TYPO3 extension `EXT:aws_sdk_php` is a wrapper for the AWS SDK for PHP. Its main purpose is to integrate the SDK in non-Composer based TYPO3 installations. If your TYPO3 instance uses [Composer](https://getcomposer.org/), we recommend to install the official AWS SDK for PHP from the original repository directly:

```bash
$ composer require aws/aws-sdk-php
```

## Minimum Requirements

- PHP v5.5 or later
- PHP extension [SimpleXML](https://www.php.net/manual/en/book.simplexml.php)

If you need to sign private Amazon CloudFront URLs, the PHP extension [OpenSSL](http://php.net/manual/en/book.openssl.php) is also required.

Further details are available in the [AWS documentation](https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_requirements.html).

## Installation

To install the extension in a legacy TYPO3 installation (without Composer), follow these steps:

- Login at the TYPO3 backend as an administrator user.
- Open the Extension Manager and update the extension list if required.
- Search for the extension key `aws_sdk_php`.
- Click the install icon next to the extension.

## Usage

Once you installed the TYPO3 extension, the PHP namespaces are available for your custom PHP code. For example, the S3 Client class:

```php
use Aws\S3\S3Client;
...
$client = new S3Client();
```

## Additional Resources

You find further information about the AWS SDK for PHP at:

- Official AWS product page: <https://aws.amazon.com/sdk-for-php/>
- Code repository at Github: <https://github.com/aws/aws-sdk-php>
- API documentation: <https://docs.aws.amazon.com/aws-sdk-php/v3/api/>

Further details: <https://github.com/aws/aws-sdk-php/blob/master/README.md>

## License

The AWS SDK for PHP is copyright by Amazon Web Services, Inc. Licensed under the Apache-2.0 license.
