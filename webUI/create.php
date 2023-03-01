<?php
$repo = $_POST['repo'];
shell_exec("bash ../shell/create.sh $repo");
header("Location: index.php");
?>