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


Example Usage
-------------

Get User Details
^^^^^^^^^^^^^^^^

.. code-block:: php

	<?php
	use SchamsNet\AwsSdkPhp\AwsService;
	use Aws\Iam\Exception\IamException;

	class ExampleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
	{
		/**
		 * AWS region (required since SDK version 3)
		 *
		 * @access public
		 * @var string
		 */
		private $region = 'us-east-1';

		/**
		 * AWS Access Key
		 * THIS IS A DEMO ONLY - DO NOT STORE SENSITIVE INFORMATION HARD-CODED IN YOUR CODE!
		 *
		 * @access private
		 * @var string
		 */
		private $accessKey = 'AKIAxxxxxxxxxxxx2QMN';

		/**
		 * AWS Access Secret
		 * THIS IS A DEMO ONLY - DO NOT STORE SENSITIVE INFORMATION HARD-CODED IN YOUR CODE!
		 *
		 * @access private
		 * @var string
		 */
		private $accessSecret = 'QzCfxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx4key6r';

		/**
		 * Enable debugging
		 *
		 * @access private
		 * @var boolean
		 */
		private $debug = FALSE;

		public function initAction()
		{
			// configuration options
			// @see http://docs.aws.amazon.com/aws-sdk-php/v3/guide/guide/configuration.html
			$options = [
				'region' => $this->region,
				'version' => 'latest',
				'credentials' => [
					'key' => $this->accessKey,
					'secret' =>	$this->accessSecret,
				],
				'debug' => $this->debug
			];

			// create an instance of AWS class IamClient
			$client = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Aws\Iam\IamClient', $options);

			try {
				$data = $client->getUser();

				if(is_object($data)) {
					// data successfully retrieved
				}
				else {
					// something went wrong
				}
			} catch (IamException $e) {
				// something went very, very wrong
				// $e->getMessage()
			}
		}
	}

This code example opens a connection to the API of Amazon Web Services (AWS),
using the access credentials *accessKey* and *accessSecret*. Then, it
selects the service locator AWS Identity and Access Management (IAM) and
executes the getUser operation, which retrieves information about the
current user, including the user's path, unique ID, and Amazon Resource Name
(ARN). The object *data* contains the information returned from the API and
can then be processed further.

The complete documentation of methods available in the IAM client is available
at: `<http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.Iam.IamClient.html>`_.
