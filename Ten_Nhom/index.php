<?
    require "config.php";
    require "classes/database.php";
    require "classes/user.php";
    $conn = require "inc/db.php";

    if($conn){
       // echo "Kết nối thành công <br/>";
        $rs = User::authenticate($conn, "timduongdi", "abc123");
        if($rs){
            echo "Đăng nhập thành công";
        }else{
            die("Thông tin đăng nhập không đúng");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>From đăng nhập</h1>
    <fieldset>
        <legend>Thông tin đăng nhập</legend>
        <form name="frmLogin" action="" method="post">
            <p>
                <label for="username">Username:</label>
            </p>
        </form>
    </fieldset>
</body>
</html>