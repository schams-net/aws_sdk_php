.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. ==================================================
.. DEFINE SOME TEXTROLES
.. --------------------------------------------------
.. role::   underline
.. role::   typoscript(code)
.. role::   ts(typoscript)
   :class:  typoscript
.. role::   php(code)


Getting Started
---------------

Compatibility
^^^^^^^^^^^^^

- TYPO3 version 7.x (including TYPO3 v7 LTS)
- TYPO3 version 8.x (including TYPO3 v8 LTS)
- PHP version 5.5.x to 7.2.x


Minimum Requirements
^^^^^^^^^^^^^^^^^^^^

To run the SDK, your system will need to meet the minimum requirements:

- PHP >= 5.5.0
- OpenSSL PHP extension (to sign private Amazon CloudFront URLs)

It is also required to have an AWS account and appropriate access
credentials (*AWS Access Key* and *AWS Access Secret*). In order to allow
multiple TYPO3 extensions to use different AWS credentials, these details
need to be configured in the extensions, not in **EXT:aws\_sdk\_php**.


Recommendations (Optimal Settings)
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

- cURL >= 7.16.2
- OPCache

See: `http://docs.aws.amazon.com/aws-sdk-php/v3/guide/getting-started/requirements.html#minimum-requirements`_


Installation
^^^^^^^^^^^^

1. login as an administrator user at the TYPO3 backend
2. open the **Extension Manager** and update the extension list if required
3. search for extension key "aws\_sdk\_php"
4. click the install icon next to the extension
5. done


Upgrade from Version 2.x
^^^^^^^^^^^^^^^^^^^^^^^^

.. important::

   **BREAKING CHANGES**

   It is important to understand that there are significant differences between
   AWS SDK for PHP version 2 and version 3. It heavily depends on your code, how
   smooth a migration to version 3 is, but it is highly recommended to read the
   official
   `Migration Guide <http://docs.aws.amazon.com/aws-sdk-php/v3/guide/guide/migration.html>`,
   review and **test** your code, before deploying it in a production site.
