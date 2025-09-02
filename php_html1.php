<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php예제1</h1>
    <?php echo "안녕"?>
    <?php print("내 이름은 남진우") ?>

    <?php
    $name = "남진우";
    $age = 17;
    echo "내 이름은" . $name . "이고 나이는 " . $age . "살이야";
    ?>

    <?php
    $String = "문자열";
    $int = 0;
    $float = 2.33;
    $bool = true;
    ?>

    <h2>나이를 입력하세요:</h2>
    <form method="post">
        <input type="number" name="age" placeholder="나이 입력" required>
        <button type="submit">확인</button>
    </form>

    <?php
    if (isset($_POST['age'])) { // isset => null인지 확인하는 코드, ($_POST['age']) <= post한 값
        $age = (int)$_POST['age']; // $age란 번수에 (정수)post값 대입

        if ($age > 19) {
            echo "성인입니다.";
        }
        else {
            echo "미성년자입니다.";
        }
    }
    ?>
</body>
</html>