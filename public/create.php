<?php
try {
$repo = $_POST['repo'];
shell_exec("bash ../shell/create.sh $repo");
header("Location: index.php");
} catch (Exception $null) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Location: 500.php");
}
?>