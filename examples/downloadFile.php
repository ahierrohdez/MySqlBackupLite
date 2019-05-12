<?php

include('MySqlBackup.php');

$arrayDbConf['host'] = 'dbHost';
$arrayDbConf['user'] = 'dbUser';
$arrayDbConf['pass'] = 'dbPassword';
$arrayDbConf['name'] = 'dbName';


try {

  $bck = new MySqlBackupLite($arrayDbConf);
  $bck->backUp();
  $bck->downloadFile();

}
catch(Exception $e) {

  echo $e;

}

?>
