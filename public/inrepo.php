<?php
try {
$repo = $_GET['repo'];

shell_exec("bash ../shell/pull.sh ../public/show/$repo");

echo "<button onclick='history.back()'>&lt;</button>";
echo "<button onclick='history.forward()'>&gt;</button>";
echo "<br>";

foreach (scandir("./show/$repo") as $contents) {
            if ($contents[0] === '.') {
              continue;
        }
        echo "<a href='repoconts.php?path=./show/$repo/$contents'>$contents</a>" . "<br>";
}

} catch (Exception $null) {
  header("HTTP/1.1 500 Internal Server Error");
  header("Location: 500.php");
}

?>

