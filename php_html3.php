<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    for ($i = 1; $i <= 5; $i++) {
        echo "숫자: $i<br>";
    }

    $count = 1;
    while ($count <= 5) {
        echo "<h1>$count 개</h1><br>";
        $count++;
    }
    ?>
</body>
</html>