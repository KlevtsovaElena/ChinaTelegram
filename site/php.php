<?php

header('Access-Control-Allow-Origin: *');

$data = file_get_contents('db.json');

if(isset($_GET['addpost'])){
  $alldb = json_decode($data);
  $backtime = date('c');
  $alldb[]=["name"=>$_GET['name'],"message"=>$_GET['message'],"date"=>$_GET['date'], "backtime"=>$backtime];
  echo $alldb;
  $data = json_encode($alldb);
  file_put_contents('db.json',$data);
}
if(isset($_GET['getposts'])){
  $data = file_get_contents('db.json');
  echo $data;
}