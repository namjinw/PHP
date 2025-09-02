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

    <form method="post">
        <input type="text" name="name" placeholder="이름" required><br>
        <select name="gender" required>
            <option value="" disabled selected>성별</option>
            <option value="남자">남자</option>
            <option value="여자">여자</option>
        </select><br>
        <input type="text" name="date" placeholder="생년월일" maxlength="8" required><br>
        <input type="submit" value="제출">
    </form>
    <?php
    if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $gender = $_POST["gender"];
        $data = $_POST["date"];
        $users = [$name, $gender, $data];
        foreach($users as $user) {
            echo "<p>$user</p><br>";
        }
    }
    ?>
</body>
</html>