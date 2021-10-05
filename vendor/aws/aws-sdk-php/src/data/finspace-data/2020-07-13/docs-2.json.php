<?php
// This file was auto-generated from sdk-root/src/data/finspace-data/2020-07-13/docs-2.json
return [ 'version' => '2.0', 'service' => '<p> The FinSpace APIs let you take actions inside the FinSpace environment. </p>', 'operations' => [ 'CreateChangeset' => '<p>Creates a new changeset in a FinSpace dataset.</p>', 'GetProgrammaticAccessCredentials' => '<p>Request programmatic credentials to use with Habanero SDK.</p>', 'GetWorkingLocation' => '<p>A temporary Amazon S3 location to copy your files from a source location to stage or use as a scratch space in Habanero notebook.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'ChangeType' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$changeType' => '<p>Change type indicates how a changeset is applied to a dataset.</p> <ul> <li> <p> <code>REPLACE</code> - Changeset is considered as a replacement to all prior loaded changesets.</p> </li> <li> <p> <code>APPEND</code> - Changeset is considered as an addition to the end of all prior loaded changesets.</p> </li> <li> <p> <code>MODIFY</code> - Changeset is considered as a replacement to a specific prior ingested changeset.</p> </li> </ul>', 'CreateChangesetRequest$changeType' => '<p>Option to indicate how a changeset will be applied to a dataset.</p> <ul> <li> <p> <code>REPLACE</code> - Changeset will be considered as a replacement to all prior loaded changesets.</p> </li> <li> <p> <code>APPEND</code> - Changeset will be considered as an addition to the end of all prior loaded changesets.</p> </li> </ul>', ], ], 'ChangesetInfo' => [ 'base' => '<p>A changeset is unit of data in a dataset.</p>', 'refs' => [ 'CreateChangesetResponse$changeset' => '<p>Returns the changeset details.</p>', ], ], 'ChangesetStatus' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$status' => '<p>The status of changeset creation operation.</p>', ], ], 'CreateChangesetRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateChangesetResponse' => [ 'base' => NULL, 'refs' => [], ], 'Credentials' => [ 'base' => '<p>Set short term API credentials.</p>', 'refs' => [ 'GetProgrammaticAccessCredentialsResponse$credentials' => '<p>Returns the programmatic credentials.</p>', ], ], 'ErrorCategory' => [ 'base' => NULL, 'refs' => [ 'ErrorInfo$errorCategory' => '<p>The category of the error.</p> <ul> <li> <p> <code>VALIDATION</code> -The inputs to this request are invalid.</p> </li> <li> <p> <code>SERVICE_QUOTA_EXCEEDED</code> - Service quotas have been exceeded. Please contact AWS support to increase quotas.</p> </li> <li> <p> <code>ACCESS_DENIED</code> - Missing required permission to perform this request.</p> </li> <li> <p> <code>RESOURCE_NOT_FOUND</code> - One or more inputs to this request were not found.</p> </li> <li> <p> <code>THROTTLING</code> - The system temporarily lacks sufficient resources to process the request.</p> </li> <li> <p> <code>INTERNAL_SERVICE_EXCEPTION</code> - An internal service error has occurred.</p> </li> <li> <p> <code>CANCELLED</code> - A user recoverable error has occurred.</p> </li> </ul>', ], ], 'ErrorInfo' => [ 'base' => '<p>Error message.</p>', 'refs' => [ 'ChangesetInfo$errorInfo' => '<p>The structure with error messages.</p>', ], ], 'FormatType' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$formatType' => '<p>Format type of the input files loaded into the changeset.</p>', 'CreateChangesetRequest$formatType' => '<p>Format type of the input files being loaded into the changeset.</p>', ], ], 'GetProgrammaticAccessCredentialsRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetProgrammaticAccessCredentialsResponse' => [ 'base' => NULL, 'refs' => [], ], 'GetWorkingLocationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetWorkingLocationResponse' => [ 'base' => NULL, 'refs' => [], ], 'IdType' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$id' => '<p>Unique identifier for a changeset.</p>', 'ChangesetInfo$datasetId' => '<p>The unique identifier for the FinSpace dataset in which the changeset is created.</p>', 'CreateChangesetRequest$datasetId' => '<p>The unique identifier for the FinSpace dataset in which the changeset will be created.</p>', 'GetProgrammaticAccessCredentialsRequest$environmentId' => '<p>The habanero environment identifier.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>The request processing has failed because of an unknown error, exception or failure.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>One or more resources can\'t be found.</p>', 'refs' => [], ], 'SessionDuration' => [ 'base' => NULL, 'refs' => [ 'GetProgrammaticAccessCredentialsRequest$durationInMinutes' => '<p>The time duration in which the credentials remain valid. </p>', 'GetProgrammaticAccessCredentialsResponse$durationInMinutes' => '<p>Returns the duration in which the credentials will remain valid.</p>', ], ], 'SourceType' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$sourceType' => '<p>Type of the data source from which the files to create the changeset are sourced.</p> <ul> <li> <p> <code>S3</code> - Amazon S3.</p> </li> </ul>', 'CreateChangesetRequest$sourceType' => '<p>Type of the data source from which the files to create the changeset will be sourced.</p> <ul> <li> <p> <code>S3</code> - Amazon S3.</p> </li> </ul>', ], ], 'ThrottlingException' => [ 'base' => '<p>The request was denied due to request throttling.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$createTimestamp' => '<p>The timestamp at which the changeset was created in FinSpace.</p>', ], ], 'ValidationException' => [ 'base' => '<p>The input fails to satisfy the constraints specified by an AWS service.</p>', 'refs' => [], ], 'arn' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$changesetArn' => '<p>The ARN identifier of the changeset.</p>', ], ], 'errorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$message' => NULL, 'InternalServerException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ValidationException$message' => NULL, ], ], 'locationType' => [ 'base' => NULL, 'refs' => [ 'GetWorkingLocationRequest$locationType' => '<p>Specify the type of the working location.</p> <ul> <li> <p> <code>SAGEMAKER</code> - Use the Amazon S3 location as a temporary location to store data content when working with FinSpace Notebooks that run on SageMaker studio.</p> </li> <li> <p> <code>INGESTION</code> - Use the Amazon S3 location as a staging location to copy your data content and then use the location with the changeset creation operation.</p> </li> </ul>', ], ], 'stringMap' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$sourceParams' => '<p>Source path from which the files to create the changeset are sourced.</p>', 'ChangesetInfo$formatParams' => '<p>Structure of the source file(s).</p>', 'ChangesetInfo$changesetLabels' => '<p>Tags associated with the changeset.</p>', 'CreateChangesetRequest$sourceParams' => '<p>Source path from which the files to create the changeset will be sourced.</p>', 'CreateChangesetRequest$formatParams' => '<p>Options that define the structure of the source file(s).</p>', 'CreateChangesetRequest$tags' => '<p>Metadata tags to apply to this changeset.</p>', ], ], 'stringMapKey' => [ 'base' => NULL, 'refs' => [ 'stringMap$key' => NULL, ], ], 'stringMapValue' => [ 'base' => NULL, 'refs' => [ 'stringMap$value' => NULL, ], ], 'stringValue' => [ 'base' => NULL, 'refs' => [ 'ChangesetInfo$updatesChangesetId' => '<p>Unique identifier of the changeset that is updated.</p>', 'ChangesetInfo$updatedByChangesetId' => '<p>Unique identifier of the changeset that is updated a changeset.</p>', ], ], 'stringValueLength1to1024' => [ 'base' => NULL, 'refs' => [ 'GetWorkingLocationResponse$s3Uri' => '<p>Returns the Amazon S3 URI for the working location.</p>', 'GetWorkingLocationResponse$s3Path' => '<p>Returns the Amazon S3 Path for the working location.</p>', ], ], 'stringValueLength1to255' => [ 'base' => NULL, 'refs' => [ 'Credentials$accessKeyId' => '<p>The access key identifier.</p>', ], ], 'stringValueLength1to63' => [ 'base' => NULL, 'refs' => [ 'GetWorkingLocationResponse$s3Bucket' => '<p>Returns the Amazon S3 bucket name for the working location.</p>', ], ], 'stringValueMaxLength1000' => [ 'base' => NULL, 'refs' => [ 'Credentials$secretAccessKey' => '<p>The access key.</p>', 'Credentials$sessionToken' => '<p>The session token.</p>', 'ErrorInfo$errorMessage' => '<p>The text of the error message.</p>', ], ], ],];
