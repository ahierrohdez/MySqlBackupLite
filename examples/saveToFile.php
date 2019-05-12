<?php

include('MySqlBackup.php');

$arrayDbConf['host'] = 'dbHost';
$arrayDbConf['user'] = 'dbUser';
$arrayDbConf['pass'] = 'dbPassword';
$arrayDbConf['name'] = 'dbName';


try {

  $bck = new MySqlBackupLite($arrayDbConf);
  $bck->backUp();
  $bck->setFileDir('./backups/');
  $bck->setFileName('backupFileNae.sql');
  $bck->saveToFile();

}
catch(Exception $e) {

  echo $e;

}

?>
