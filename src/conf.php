<?php

session_start();

$randomURL=rand(10,100).'%'.rand(2,9).rand();

define("DB_HOST", "localhost");
define("DB_NAME", "itiphpproject");
define("DB_USER", "root");
define("DB_PASS", "");

// define("uid", "");

$_SESSION['fname'] = "";
$_SESSION['uid'] = "";
