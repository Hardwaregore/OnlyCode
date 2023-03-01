<?php
$repo = $_GET['repo'];

shell_exec("bash ../shell/pull.sh ../webUI/show/$repo");

echo "<button onclick='history.back()'>&lt;</button>";
echo "<button onclick='history.forward()'>&gt;</button>";
echo "<br>";

foreach (scandir("./show/$repo") as $contents) {
            if ($contents[0] === '.') {
              continue;
        }
        echo "<a href='repoconts.php?path=./show/$repo/$contents'>$contents</a>" . "<br>";
}



?>

