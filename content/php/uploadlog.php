<?php
include("credential.php")
$json = $_POST['log'];

if(!empty($json))
{
    $decoded = json_decode($json);
    if(json_last_error() == JSON_ERROR_NONE)
    {
        //echo $decoded. '\n';
        $uuid = $decoded->{'uuid'};
        $version = $decoded->{'version'};
        $app = $decoded->{'app'};
        $log = $decoded->logs;

        echo $uuid . '\n';
        echo $version . '\n';
        echo $log . '\n';
        echo $app . '\n';

        $dbconn = pg_connect("host=localhost port=5432 dbname=$database user=$username password=$password");
        /* schema database: uuid of local player, category, log, datetime */

        foreach($log as $value)
        {
            pg_query($dbconn, "INSERT INTO log VALUES('".$uuid."','".$version."',".$app.",'".$value->{'level'}."','".$value->{'log'}."','".$value->{'category'}."','".$value->{'timestamp'}."')");
        }
    }
    else {
      echo $json;
      echo "Json is unvalid";
    }
}
/*





{
  uuid: "1",
  version: "1.9.0",
  app: 0,
  logs: [
    {
      level: "debug"
      category: "ihm"
      log: "click on button open file"
      timestamp: "2018-09-20 18:38:40.672837"
    },
    {
      level: "debug"
      category: "ihm"
      log: "click on button close file"
      timestamp: "2018-09-20 18:38:41.672837"
    }
  ]
}








*/
