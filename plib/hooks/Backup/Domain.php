<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.

class Modules_BackupHook_Backup_Domain extends pm_Hook_Backup_Domain
{
    public function postBackup(pm_Domain $domain)
    {
        pm_Log::debug(__CLASS__ . '::' . __METHOD__ . '(' . $domain->getDisplayName() . ')');
    }

    public function backup(pm_Domain $domain)
    {
        pm_Log::debug(__CLASS__ . '::' . __METHOD__ . '(' . $domain->getDisplayName() . ')');
        return parent::backup($domain);
    }

    public function postRestore(pm_Domain $domain)
    {
        pm_Log::debug(__CLASS__ . '::' . __METHOD__ . '(' . $domain->getDisplayName() . ')');
    }

    public function restore(pm_Domain $domain, $idMapping, $pleskVersion, $extVersion, $config, $contentDir)
    {
        pm_Log::debug(__CLASS__ . '::' . __METHOD__ . '(' . $domain->getDisplayName() . ')');
    }
}
