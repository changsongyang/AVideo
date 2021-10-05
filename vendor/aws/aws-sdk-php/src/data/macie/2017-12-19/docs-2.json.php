<?php
// This file was auto-generated from sdk-root/src/data/macie/2017-12-19/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>Amazon Macie Classic</fullname> <p>Amazon Macie Classic is a security service that uses machine learning to automatically discover, classify, and protect sensitive data in AWS. Macie Classic recognizes sensitive data such as personally identifiable information (PII) or intellectual property, and provides you with dashboards and alerts that give visibility into how this data is being accessed or moved. For more information, see the <a href="https://docs.aws.amazon.com/macie/latest/userguide/what-is-macie.html">Amazon Macie Classic User Guide</a>. </p>', 'operations' => [ 'AssociateMemberAccount' => '<p>Associates a specified AWS account with Amazon Macie Classic as a member account.</p>', 'AssociateS3Resources' => '<p>Associates specified S3 resources with Amazon Macie Classic for monitoring and data classification. If memberAccountId isn\'t specified, the action associates specified S3 resources with Macie Classic for the current Macie Classic administrator account. If memberAccountId is specified, the action associates specified S3 resources with Macie Classic for the specified member account. </p>', 'DisassociateMemberAccount' => '<p>Removes the specified member account from Amazon Macie Classic.</p>', 'DisassociateS3Resources' => '<p>Removes specified S3 resources from being monitored by Amazon Macie Classic. If memberAccountId isn\'t specified, the action removes specified S3 resources from Macie Classic for the current Macie Classic administrator account. If memberAccountId is specified, the action removes specified S3 resources from Macie Classic for the specified member account.</p>', 'ListMemberAccounts' => '<p>Lists all Amazon Macie Classic member accounts for the current Macie Classic administrator account.</p>', 'ListS3Resources' => '<p>Lists all the S3 resources associated with Amazon Macie Classic. If memberAccountId isn\'t specified, the action lists the S3 resources associated with Macie Classic for the current Macie Classic administrator account. If memberAccountId is specified, the action lists the S3 resources associated with Macie Classic for the specified member account. </p>', 'UpdateS3Resources' => '<p>Updates the classification types for the specified S3 resources. If memberAccountId isn\'t specified, the action updates the classification types of the S3 resources associated with Amazon Macie Classic for the current Macie Classic administrator account. If memberAccountId is specified, the action updates the classification types of the S3 resources associated with Macie Classic for the specified member account. </p>', ], 'shapes' => [ 'AWSAccountId' => [ 'base' => NULL, 'refs' => [ 'AssociateMemberAccountRequest$memberAccountId' => '<p>The ID of the AWS account that you want to associate with Amazon Macie Classic as a member account.</p>', 'AssociateS3ResourcesRequest$memberAccountId' => '<p>The ID of the Amazon Macie Classic member account whose resources you want to associate with Macie Classic. </p>', 'DisassociateMemberAccountRequest$memberAccountId' => '<p>The ID of the member account that you want to remove from Amazon Macie Classic.</p>', 'DisassociateS3ResourcesRequest$memberAccountId' => '<p>The ID of the Amazon Macie Classic member account whose resources you want to remove from being monitored by Macie Classic. </p>', 'ListS3ResourcesRequest$memberAccountId' => '<p>The Amazon Macie Classic member account ID whose associated S3 resources you want to list. </p>', 'MemberAccount$accountId' => '<p>The AWS account ID of the Amazon Macie Classic member account.</p>', 'UpdateS3ResourcesRequest$memberAccountId' => '<p>The AWS ID of the Amazon Macie Classic member account whose S3 resources\' classification types you want to update. </p>', ], ], 'AccessDeniedException' => [ 'base' => '<p>You do not have required permissions to access the requested resource.</p>', 'refs' => [], ], 'AssociateMemberAccountRequest' => [ 'base' => NULL, 'refs' => [], ], 'AssociateS3ResourcesRequest' => [ 'base' => NULL, 'refs' => [], ], 'AssociateS3ResourcesResult' => [ 'base' => NULL, 'refs' => [], ], 'BucketName' => [ 'base' => NULL, 'refs' => [ 'S3Resource$bucketName' => '<p>The name of the S3 bucket.</p>', 'S3ResourceClassification$bucketName' => '<p>The name of the S3 bucket that you want to associate with Amazon Macie Classic.</p>', 'S3ResourceClassificationUpdate$bucketName' => '<p>The name of the S3 bucket whose classification types you want to update.</p>', ], ], 'ClassificationType' => [ 'base' => '<p>The classification type that Amazon Macie Classic applies to the associated S3 resources. </p>', 'refs' => [ 'S3ResourceClassification$classificationType' => '<p>The classification type that you want to specify for the resource associated with Amazon Macie Classic. </p>', ], ], 'ClassificationTypeUpdate' => [ 'base' => '<p>The classification type that Amazon Macie Classic applies to the associated S3 resources. At least one of the classification types (oneTime or continuous) must be specified. </p>', 'refs' => [ 'S3ResourceClassificationUpdate$classificationTypeUpdate' => '<p>The classification type that you want to update for the resource associated with Amazon Macie Classic. </p>', ], ], 'DisassociateMemberAccountRequest' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateS3ResourcesRequest' => [ 'base' => NULL, 'refs' => [], ], 'DisassociateS3ResourcesResult' => [ 'base' => NULL, 'refs' => [], ], 'ErrorCode' => [ 'base' => 'Error code for the exception', 'refs' => [ 'FailedS3Resource$errorCode' => '<p>The status code of a failed item.</p>', 'InternalException$errorCode' => NULL, 'InvalidInputException$errorCode' => NULL, 'LimitExceededException$errorCode' => NULL, ], ], 'ExceptionMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'FailedS3Resource$errorMessage' => '<p>The error message of a failed item.</p>', 'InternalException$message' => NULL, 'InvalidInputException$message' => NULL, 'LimitExceededException$message' => NULL, ], ], 'FailedS3Resource' => [ 'base' => '<p>Includes details about the failed S3 resources.</p>', 'refs' => [ 'FailedS3Resources$member' => NULL, ], ], 'FailedS3Resources' => [ 'base' => NULL, 'refs' => [ 'AssociateS3ResourcesResult$failedS3Resources' => '<p>S3 resources that couldn\'t be associated with Amazon Macie Classic. An error code and an error message are provided for each failed item. </p>', 'DisassociateS3ResourcesResult$failedS3Resources' => '<p>S3 resources that couldn\'t be removed from being monitored and classified by Amazon Macie Classic. An error code and an error message are provided for each failed item. </p>', 'UpdateS3ResourcesResult$failedS3Resources' => '<p>The S3 resources whose classification types can\'t be updated. An error code and an error message are provided for each failed item. </p>', ], ], 'FieldName' => [ 'base' => 'Field that has invalid input', 'refs' => [ 'InvalidInputException$fieldName' => NULL, ], ], 'InternalException' => [ 'base' => '<p>Internal server error.</p>', 'refs' => [], ], 'InvalidInputException' => [ 'base' => '<p>The request was rejected because an invalid or out-of-range value was supplied for an input parameter. </p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>The request was rejected because it attempted to create resources beyond the current AWS account limits. The error code describes the limit exceeded. </p>', 'refs' => [], ], 'ListMemberAccountsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListMemberAccountsResult' => [ 'base' => NULL, 'refs' => [], ], 'ListS3ResourcesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListS3ResourcesResult' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListMemberAccountsRequest$maxResults' => '<p>Use this parameter to indicate the maximum number of items that you want in the response. The default value is 250. </p>', 'ListS3ResourcesRequest$maxResults' => '<p>Use this parameter to indicate the maximum number of items that you want in the response. The default value is 250. </p>', ], ], 'MemberAccount' => [ 'base' => '<p>Contains information about the Amazon Macie Classic member account.</p>', 'refs' => [ 'MemberAccounts$member' => NULL, ], ], 'MemberAccounts' => [ 'base' => NULL, 'refs' => [ 'ListMemberAccountsResult$memberAccounts' => '<p>A list of the Amazon Macie Classic member accounts returned by the action. The current Macie Classic administrator account is also included in this list. </p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListMemberAccountsRequest$nextToken' => '<p>Use this parameter when paginating results. Set the value of this parameter to null on your first call to the ListMemberAccounts action. Subsequent calls to the action fill nextToken in the request with the value of nextToken from the previous response to continue listing data. </p>', 'ListMemberAccountsResult$nextToken' => '<p>When a response is generated, if there is more data to be listed, this parameter is present in the response and contains the value to use for the nextToken parameter in a subsequent pagination request. If there is no more data to be listed, this parameter is set to null. </p>', 'ListS3ResourcesRequest$nextToken' => '<p>Use this parameter when paginating results. Set its value to null on your first call to the ListS3Resources action. Subsequent calls to the action fill nextToken in the request with the value of nextToken from the previous response to continue listing data. </p>', 'ListS3ResourcesResult$nextToken' => '<p>When a response is generated, if there is more data to be listed, this parameter is present in the response and contains the value to use for the nextToken parameter in a subsequent pagination request. If there is no more data to be listed, this parameter is set to null. </p>', ], ], 'Prefix' => [ 'base' => NULL, 'refs' => [ 'S3Resource$prefix' => '<p>The prefix of the S3 bucket. </p>', 'S3ResourceClassification$prefix' => '<p>The prefix of the S3 bucket that you want to associate with Amazon Macie Classic.</p>', 'S3ResourceClassificationUpdate$prefix' => '<p>The prefix of the S3 bucket whose classification types you want to update.</p>', ], ], 'ResourceType' => [ 'base' => 'Resource type that caused the exception', 'refs' => [ 'AccessDeniedException$resourceType' => NULL, 'LimitExceededException$resourceType' => NULL, ], ], 'S3ContinuousClassificationType' => [ 'base' => NULL, 'refs' => [ 'ClassificationType$continuous' => '<p>A continuous classification of the objects that are added to a specified S3 bucket. Amazon Macie Classic begins performing continuous classification after a bucket is successfully associated with Macie Classic. </p>', 'ClassificationTypeUpdate$continuous' => '<p>A continuous classification of the objects that are added to a specified S3 bucket. Amazon Macie Classic begins performing continuous classification after a bucket is successfully associated with Macie Classic. </p>', ], ], 'S3OneTimeClassificationType' => [ 'base' => NULL, 'refs' => [ 'ClassificationType$oneTime' => '<p>A one-time classification of all of the existing objects in a specified S3 bucket. </p>', 'ClassificationTypeUpdate$oneTime' => '<p>A one-time classification of all of the existing objects in a specified S3 bucket. </p>', ], ], 'S3Resource' => [ 'base' => '<p>Contains information about the S3 resource. This data type is used as a request parameter in the DisassociateS3Resources action and can be used as a response parameter in the AssociateS3Resources and UpdateS3Resources actions. </p>', 'refs' => [ 'FailedS3Resource$failedItem' => '<p>The failed S3 resources.</p>', 'S3Resources$member' => NULL, ], ], 'S3ResourceClassification' => [ 'base' => '<p>The S3 resources that you want to associate with Amazon Macie Classic for monitoring and data classification. This data type is used as a request parameter in the AssociateS3Resources action and a response parameter in the ListS3Resources action. </p>', 'refs' => [ 'S3ResourcesClassification$member' => NULL, ], ], 'S3ResourceClassificationUpdate' => [ 'base' => '<p>The S3 resources whose classification types you want to update. This data type is used as a request parameter in the UpdateS3Resources action. </p>', 'refs' => [ 'S3ResourcesClassificationUpdate$member' => NULL, ], ], 'S3Resources' => [ 'base' => NULL, 'refs' => [ 'DisassociateS3ResourcesRequest$associatedS3Resources' => '<p>The S3 resources (buckets or prefixes) that you want to remove from being monitored and classified by Amazon Macie Classic. </p>', ], ], 'S3ResourcesClassification' => [ 'base' => NULL, 'refs' => [ 'AssociateS3ResourcesRequest$s3Resources' => '<p>The S3 resources that you want to associate with Amazon Macie Classic for monitoring and data classification. </p>', 'ListS3ResourcesResult$s3Resources' => '<p>A list of the associated S3 resources returned by the action.</p>', ], ], 'S3ResourcesClassificationUpdate' => [ 'base' => NULL, 'refs' => [ 'UpdateS3ResourcesRequest$s3ResourcesUpdate' => '<p>The S3 resources whose classification types you want to update.</p>', ], ], 'UpdateS3ResourcesRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateS3ResourcesResult' => [ 'base' => NULL, 'refs' => [], ], ],];
