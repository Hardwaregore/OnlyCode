<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git</title>
</head>
<body>
    
    <?php
        echo "<button onclick='history.back()' disabled>&lt;</button>";
        echo "<button onclick='history.forward()'>&gt;</button>";
        echo "<br>";

        foreach (scandir("./show") as $filename) {
            if ($filename[0] === '.') {
              continue;
        }
        echo "<a href='inrepo.php?repo=$filename'>$filename</a>" . "<br>";
}

        
    ?>

    
<form action="create.php" method="post">
Repo: <input type="text" name="repo">

<button type="submit">Submit</button>
</form>

    
</body>
</html>