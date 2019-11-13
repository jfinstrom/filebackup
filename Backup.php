<?php

namespace FreePBX\modules\Filebackup;
use FreePBX\modules\Backup as Base;

class Backup extends Base\BackupBase
{
    public function runBackup($id, $transaction)
    {
        $this->addDirectories([
            '/tftpboot',
        ]);
        $files = glob("/tftpboot/*xml");
        foreach ($files as $file) {
            $path = pathinfo($file, PATHINFO_DIRNAME);
            $this->addFile(basename($file), $path, '', "conf");
        }
        return $this;
    }
}
