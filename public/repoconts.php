

<?php
try{
$contents = $_GET['path'];

if (!file_exists($contents)) {
  throw new Exception('lol get errored');
}

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
  echo nl2br(htmlspecialchars($conts));
}

} catch (Exception $null) {
  header("HTTP/1.1 404 Not Found");
  // header("Location: 500.php");
  require("404.php");
}

?>