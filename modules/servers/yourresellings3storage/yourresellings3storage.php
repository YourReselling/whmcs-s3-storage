<?php

declare(strict_types=1);

if (! defined('WHMCS')) {
    exit('Direct access is not permitted.');
}

require_once __DIR__.'/bootstrap.php';

use YourReselling\Whmcs\S3Storage\Integration\WhmcsModule;

/** S3 Storage: MetaData. */
function yourresellings3storage_MetaData(): array
{
    return ['DisplayName' => 'Your-Reselling · S3 Storage', 'APIVersion' => '1.1', 'RequiresServer' => true];
}

/** S3 Storage: ConfigOptions. */
function yourresellings3storage_ConfigOptions(): array
{
    return WhmcsModule::configOptions('s3_storage');
}

/** S3 Storage: CreateAccount. */
function yourresellings3storage_CreateAccount(array $params): string
{
    return WhmcsModule::run('s3_storage', 'create', $params);
}

/** S3 Storage: TestConnection. */
function yourresellings3storage_TestConnection(array $params): array
{
    return WhmcsModule::testConnection($params);
}

/** S3 Storage: ClientArea. */
function yourresellings3storage_ClientArea(array $params): array
{
    return WhmcsModule::clientArea('s3_storage', $params);
}

/** S3 Storage: AdminCustomButtonArray. */
function yourresellings3storage_AdminCustomButtonArray(): array
{
    return WhmcsModule::adminButtons('s3_storage');
}

/** S3 Storage: RefreshStatus. */
function yourresellings3storage_RefreshStatus(array $params): string
{
    return WhmcsModule::run('s3_storage', 'refresh', $params);
}

/** S3 Storage: TerminateAccount. */
function yourresellings3storage_TerminateAccount(array $params): string
{
    return WhmcsModule::run('s3_storage', 'termination', $params);
}
