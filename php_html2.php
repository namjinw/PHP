<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>로그인 확인</h1>
    <form method="post">
        <input type="text" name="userid" required><br>
        <input type="text" name="usertag" required><br>
        <input type="submit" value="로그인">
    </form>
    <?php
    if (isset($_POST["userid"])) { 
        $userid = $_POST["userid"];
        $usertag= $_POST["usertag"];
    ?>
        <div class="login-box">
            <h1>환엽합니다! <?php echo $userid ?>님</h1>
            <p><?php echo $usertag ?>이시군요!</p>
        </div>
<?php }
    else { ?>
    <div class="register-box">
        <h1>유저 정보를 입력하시오</h1>
    </div>
    <?php } ?>

    <?php
    $input = "<script>alert('해킹!');</script>";
    echo htmlspecialchars($input); // htmlspecialchars => html input 문자로 인식(코드공격X)
    ?>
</body>
</html>