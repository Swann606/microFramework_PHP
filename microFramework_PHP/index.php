<?php

/////////////////////Front controller

include_once('_config.php');

MyAutoload::start();

$request = $_GET['r']; //index.php?r

$router = new Router($request);
$router -> renderController();





