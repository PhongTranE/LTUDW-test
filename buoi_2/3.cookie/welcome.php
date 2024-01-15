<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minh họa cookie</title>
</head>
<body>
    <h2>Minh họa Cookie</h2>
    <!--Đây là đoạn nhúng php-->
    <?
    //Kiểm tra xem đã có cookie hay chưa
    try{
        if(isset($_COOKIE["user"])){
            $username = $_COOKIE["user"];
            echo "Welcome! " . $username;
        }else{
            die("You are not logged in");
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
    ?>
</body>
</html>