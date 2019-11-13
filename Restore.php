<?php

namespace FreePBX\modules\Filebackup;
use FreePBX\modules\Backup as Base;

class Restore extends Base\RestoreBase
{
    public function runRestore($jobid)
    {
        $files = $this->getFiles();
        foreach($files as $file){
            if ($file->getType() == 'conf') {
                $filename = $file->getPathTo() . '/' . $file->getFilename();
                $source = $this->tmpdir . '/files' . $file->getPathTo() . '/' . $file->getFilename();
                $dest = $filename;
                if (file_exists($source)) {
                    copy($source, $dest);
                }
            }
        }
        return $this;
    }
    public function processLegacy($pdo, $data, $tables, $unknownTables, $tmpfiledir)
    {
        return $this;
    }
}
