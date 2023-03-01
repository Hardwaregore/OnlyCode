<?php

$key =  $_POST['key'];
$repo = $_GET['repo'];
$uname = $_POST['username'];
$force = $_POST['force'];

$debug = shell_exec("bash ../shell/push.sh $repo $uname $key $force");

header("Location: inrepo.php?repo=$repo");



?>