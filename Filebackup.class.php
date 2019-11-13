<?php
namespace FreePBX\modules;
use BMO;
use FreePBX_Helpers;
use PDO;
class Filebackup extends FreePBX_Helpers implements BMO {
    public $FreePBX = null;
	public function __construct($freepbx = null) {
		if ($freepbx == null) {
			throw new Exception("Not given a FreePBX Object");
		}
        $this->FreePBX = $freepbx;
    }
    public function install(){}
    public function uninstall(){}
}