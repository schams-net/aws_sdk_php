<?php
namespace SchamsNet\AwsSdkPhp;

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

class AwsService
{

    const AWS_SERVICE_ACMPCA                          = 'acmpca';
    const AWS_SERVICE_ACM                             = 'acm';
    const AWS_SERVICE_ALEXAFORBUSINESS                = 'alexaforbusiness';
    const AWS_SERVICE_AMPLIFY                         = 'amplify';
    const AWS_SERVICE_APIGATEWAY                      = 'apigateway';
    const AWS_SERVICE_APIGATEWAYMANAGEMENTAPI         = 'apigatewaymanagementapi';
    const AWS_SERVICE_APIGATEWAYV2                    = 'apigatewayv2';
    const AWS_SERVICE_APPMESH                         = 'appmesh';
    const AWS_SERVICE_APPSYNC                         = 'appsync';
    const AWS_SERVICE_APPLICATIONAUTOSCALING          = 'applicationautoscaling';
    const AWS_SERVICE_APPLICATIONDISCOVERYSERVICE     = 'applicationdiscoveryservice';
    const AWS_SERVICE_APPSTREAM                       = 'appstream';
    const AWS_SERVICE_ATHENA                          = 'athena';
    const AWS_SERVICE_AUTOSCALING                     = 'autoscaling';
    const AWS_SERVICE_AUTOSCALINGPLANS                = 'autoscalingplans';
    const AWS_SERVICE_BACKUP                          = 'backup';
    const AWS_SERVICE_BATCH                           = 'batch';
    const AWS_SERVICE_BUDGETS                         = 'budgets';
    const AWS_SERVICE_CHIME                           = 'chime';
    const AWS_SERVICE_CLOUD9                          = 'cloud9';
    const AWS_SERVICE_CLOUDDIRECTORY                  = 'clouddirectory';
    const AWS_SERVICE_CLOUDFORMATION                  = 'cloudformation';
    const AWS_SERVICE_CLOUDFRONT                      = 'cloudfront';
    const AWS_SERVICE_CLOUDHSMV2                      = 'cloudhsmv2';
    const AWS_SERVICE_CLOUDHSM                        = 'cloudhsm';
    const AWS_SERVICE_CLOUDSEARCH                     = 'cloudsearch';
    const AWS_SERVICE_CLOUDSEARCHDOMAIN               = 'cloudsearchdomain';
    const AWS_SERVICE_CLOUDTRAIL                      = 'cloudtrail';
    const AWS_SERVICE_CLOUDWATCH                      = 'cloudwatch';
    const AWS_SERVICE_CLOUDWATCHEVENTS                = 'cloudwatchevents';
    const AWS_SERVICE_CLOUDWATCHLOGS                  = 'cloudwatchlogs';
    const AWS_SERVICE_CODEBUILD                       = 'codebuild';
    const AWS_SERVICE_CODECOMMIT                      = 'codecommit';
    const AWS_SERVICE_CODEDEPLOY                      = 'codedeploy';
    const AWS_SERVICE_CODEPIPELINE                    = 'codepipeline';
    const AWS_SERVICE_CODESTAR                        = 'codestar';
    const AWS_SERVICE_COGNITOIDENTITY                 = 'cognitoidentity';
    const AWS_SERVICE_COGNITOIDENTITYPROVIDER         = 'cognitoidentityprovider';
    const AWS_SERVICE_COGNITOSYNC                     = 'cognitosync';
    const AWS_SERVICE_COMPREHEND                      = 'comprehend';
    const AWS_SERVICE_COMPREHENDMEDICAL               = 'comprehendmedical';
    const AWS_SERVICE_CONFIGSERVICE                   = 'configservice';
    const AWS_SERVICE_CONNECT                         = 'connect';
    const AWS_SERVICE_COSTEXPLORER                    = 'costexplorer';
    const AWS_SERVICE_COSTANDUSAGEREPORTSERVICE       = 'costandusagereportservice';
    const AWS_SERVICE_DAX                             = 'dax';
    const AWS_SERVICE_DLM                             = 'dlm';
    const AWS_SERVICE_DATAPIPELINE                    = 'datapipeline';
    const AWS_SERVICE_DATASYNC                        = 'datasync';
    const AWS_SERVICE_DATABASEMIGRATIONSERVICE        = 'databasemigrationservice';
    const AWS_SERVICE_DEVICEFARM                      = 'devicefarm';
    const AWS_SERVICE_DIRECTCONNECT                   = 'directconnect';
    const AWS_SERVICE_DIRECTORYSERVICE                = 'directoryservice';
    const AWS_SERVICE_DOCDB                           = 'docdb';
    const AWS_SERVICE_DYNAMODB                        = 'dynamodb';
    const AWS_SERVICE_DYNAMODBSTREAMS                 = 'dynamodbstreams';
    const AWS_SERVICE_EKS                             = 'eks';
    const AWS_SERVICE_EC2                             = 'ec2';
    const AWS_SERVICE_ECR                             = 'ecr';
    const AWS_SERVICE_ECS                             = 'ecs';
    const AWS_SERVICE_EFS                             = 'efs';
    const AWS_SERVICE_ELASTICACHE                     = 'elasticache';
    const AWS_SERVICE_ELASTICBEANSTALK                = 'elasticbeanstalk';
    const AWS_SERVICE_ELASTICLOADBALANCING            = 'elasticloadbalancing';
    const AWS_SERVICE_ELASTICLOADBALANCINGV2          = 'elasticloadbalancingv2';
    const AWS_SERVICE_ELASTICTRANSCODER               = 'elastictranscoder';
    const AWS_SERVICE_ELASTICSEARCHSERVICE            = 'elasticsearchservice';
    const AWS_SERVICE_EMR                             = 'emr';
    const AWS_SERVICE_FMS                             = 'fms';
    const AWS_SERVICE_FSX                             = 'fsx';
    const AWS_SERVICE_FIREHOSE                        = 'firehose';
    const AWS_SERVICE_GAMELIFT                        = 'gamelift';
    const AWS_SERVICE_GLACIER                         = 'glacier';
    const AWS_SERVICE_GLOBALACCELERATOR               = 'globalaccelerator';
    const AWS_SERVICE_GLUE                            = 'glue';
    const AWS_SERVICE_GREENGRASS                      = 'greengrass';
    const AWS_SERVICE_GROUNDSTATION                   = 'groundstation';
    const AWS_SERVICE_GUARDDUTY                       = 'guardduty';
    const AWS_SERVICE_HEALTH                          = 'health';
    const AWS_SERVICE_IAM                             = 'iam';
    const AWS_SERVICE_IMPORTEXPORT                    = 'importexport';
    const AWS_SERVICE_INSPECTOR                       = 'inspector';
    const AWS_SERVICE_IOT1CLICKDEVICESSERVICE         = 'iot1clickdevicesservice';
    const AWS_SERVICE_IOT1CLICKPROJECTS               = 'iot1clickprojects';
    const AWS_SERVICE_IOTANALYTICS                    = 'iotanalytics';
    const AWS_SERVICE_IOTEVENTS                       = 'iotevents';
    const AWS_SERVICE_IOTEVENTSDATA                   = 'ioteventsdata';
    const AWS_SERVICE_IOTJOBSDATAPLANE                = 'iotjobsdataplane';
    const AWS_SERVICE_IOTTHINGSGRAPH                  = 'iotthingsgraph';
    const AWS_SERVICE_IOT                             = 'iot';
    const AWS_SERVICE_IOTDATAPLANE                    = 'iotdataplane';
    const AWS_SERVICE_KAFKA                           = 'kafka';
    const AWS_SERVICE_KINESIS                         = 'kinesis';
    const AWS_SERVICE_KINESISANALYTICS                = 'kinesisanalytics';
    const AWS_SERVICE_KINESISANALYTICSV2              = 'kinesisanalyticsv2';
    const AWS_SERVICE_KINESISVIDEO                    = 'kinesisvideo';
    const AWS_SERVICE_KINESISVIDEOARCHIVEDMEDIA       = 'kinesisvideoarchivedmedia';
    const AWS_SERVICE_KINESISVIDEOMEDIA               = 'kinesisvideomedia';
    const AWS_SERVICE_KMS                             = 'kms';
    const AWS_SERVICE_LAMBDA                          = 'lambda';
    const AWS_SERVICE_LEXMODELBUILDINGSERVICE         = 'lexmodelbuildingservice';
    const AWS_SERVICE_LEXRUNTIMESERVICE               = 'lexruntimeservice';
    const AWS_SERVICE_LICENSEMANAGER                  = 'licensemanager';
    const AWS_SERVICE_LIGHTSAIL                       = 'lightsail';
    const AWS_SERVICE_MQ                              = 'mq';
    const AWS_SERVICE_MTURK                           = 'mturk';
    const AWS_SERVICE_MACHINELEARNING                 = 'machinelearning';
    const AWS_SERVICE_MACIE                           = 'macie';
    const AWS_SERVICE_MANAGEDBLOCKCHAIN               = 'managedblockchain';
    const AWS_SERVICE_MARKETPLACECOMMERCEANALYTICS    = 'marketplacecommerceanalytics';
    const AWS_SERVICE_MARKETPLACEENTITLEMENTSERVICE   = 'marketplaceentitlementservice';
    const AWS_SERVICE_MARKETPLACEMETERING             = 'marketplacemetering';
    const AWS_SERVICE_MEDIACONNECT                    = 'mediaconnect';
    const AWS_SERVICE_MEDIACONVERT                    = 'mediaconvert';
    const AWS_SERVICE_MEDIALIVE                       = 'medialive';
    const AWS_SERVICE_MEDIAPACKAGE                    = 'mediapackage';
    const AWS_SERVICE_MEDIAPACKAGEVOD                 = 'mediapackagevod';
    const AWS_SERVICE_MEDIASTORE                      = 'mediastore';
    const AWS_SERVICE_MEDIASTOREDATA                  = 'mediastoredata';
    const AWS_SERVICE_MEDIATAILOR                     = 'mediatailor';
    const AWS_SERVICE_MIGRATIONHUB                    = 'migrationhub';
    const AWS_SERVICE_MOBILE                          = 'mobile';
    const AWS_SERVICE_NEPTUNE                         = 'neptune';
    const AWS_SERVICE_OPSWORKS                        = 'opsworks';
    const AWS_SERVICE_OPSWORKSCM                      = 'opsworkscm';
    const AWS_SERVICE_ORGANIZATIONS                   = 'organizations';
    const AWS_SERVICE_PI                              = 'pi';
    const AWS_SERVICE_PINPOINT                        = 'pinpoint';
    const AWS_SERVICE_PINPOINTEMAIL                   = 'pinpointemail';
    const AWS_SERVICE_PINPOINTSMSVOICE                = 'pinpointsmsvoice';
    const AWS_SERVICE_POLLY                           = 'polly';
    const AWS_SERVICE_PRICING                         = 'pricing';
    const AWS_SERVICE_QUICKSIGHT                      = 'quicksight';
    const AWS_SERVICE_RAM                             = 'ram';
    const AWS_SERVICE_RDSDATASERVICE                  = 'rdsdataservice';
    const AWS_SERVICE_RDS                             = 'rds';
    const AWS_SERVICE_REDSHIFT                        = 'redshift';
    const AWS_SERVICE_REKOGNITION                     = 'rekognition';
    const AWS_SERVICE_RESOURCEGROUPS                  = 'resourcegroups';
    const AWS_SERVICE_RESOURCEGROUPSTAGGINGAPI        = 'resourcegroupstaggingapi';
    const AWS_SERVICE_ROBOMAKER                       = 'robomaker';
    const AWS_SERVICE_ROUTE53                         = 'route53';
    const AWS_SERVICE_ROUTE53DOMAINS                  = 'route53domains';
    const AWS_SERVICE_ROUTE53RESOLVER                 = 'route53resolver';
    const AWS_SERVICE_S3                              = 's3';
    const AWS_SERVICE_S3CONTROL                       = 's3control';
    const AWS_SERVICE_S3MULTIREGION                   = 's3multiregion';
    const AWS_SERVICE_SAGEMAKER                       = 'sagemaker';
    const AWS_SERVICE_SAGEMAKERRUNTIME                = 'sagemakerruntime';
    const AWS_SERVICE_SECRETSMANAGER                  = 'secretsmanager';
    const AWS_SERVICE_SECURITYHUB                     = 'securityhub';
    const AWS_SERVICE_SERVERLESSAPPLICATIONREPOSITORY = 'serverlessapplicationrepository';
    const AWS_SERVICE_SERVICECATALOG                  = 'servicecatalog';
    const AWS_SERVICE_SERVICEDISCOVERY                = 'servicediscovery';
    const AWS_SERVICE_SES                             = 'ses';
    const AWS_SERVICE_SFN                             = 'sfn';
    const AWS_SERVICE_SHIELD                          = 'shield';
    const AWS_SERVICE_SMS                             = 'sms';
    const AWS_SERVICE_SNOWBALL                        = 'snowball';
    const AWS_SERVICE_SNS                             = 'sns';
    const AWS_SERVICE_SQS                             = 'sqs';
    const AWS_SERVICE_SSM                             = 'ssm';
    const AWS_SERVICE_STORAGEGATEWAY                  = 'storagegateway';
    const AWS_SERVICE_STS                             = 'sts';
    const AWS_SERVICE_SUPPORT                         = 'support';
    const AWS_SERVICE_SWF                             = 'swf';
    const AWS_SERVICE_TEXTRACT                        = 'textract';
    const AWS_SERVICE_TRANSCRIBESERVICE               = 'transcribeservice';
    const AWS_SERVICE_TRANSFER                        = 'transfer';
    const AWS_SERVICE_TRANSLATE                       = 'translate';
    const AWS_SERVICE_WAF                             = 'waf';
    const AWS_SERVICE_WAFREGIONAL                     = 'wafregional';
    const AWS_SERVICE_WORKDOCS                        = 'workdocs';
    const AWS_SERVICE_WORKLINK                        = 'worklink';
    const AWS_SERVICE_WORKMAIL                        = 'workmail';
    const AWS_SERVICE_WORKSPACES                      = 'workspaces';
    const AWS_SERVICE_XRAY                            = 'xray';
    const AWS_SERVICE_SIGNER                          = 'signer';
}