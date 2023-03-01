

<?php
$contents = $_GET['path'];

echo "<button onclick='history.back()'>&lt;</button>";
echo "<button onclick='history.forward()'>&gt;</button>";
echo "<br>";

// $conts = shell_exec("cat $contents");

$fs = filesize("$contents");
$f = fopen($contents, 'r');
$conts = fread($f, $fs);
fclose($f);

if (is_dir($contents)) {
  header("Location: folderinrepo.php?folder=$contents");
} else {
  echo "--FILENAME:$contents--";
  echo "<br>";
  echo "-----------------------------------------------";
  echo "<br>";
  echo nl2br($conts);
}



?>