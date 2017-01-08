<?php
include_once '/home/modx/setup/modinstall.class.php';
$modInstall = new modInstall();

if ($argv[1] == 'site_id') {
echo uniqid('modx',true);
}
if ($argv[1] == 'site_sessionname') {
echo 'SN' . uniqid('');
}
if ($argv[1] == 'uuid') {
   echo $modInstall->generateUUID();
}
