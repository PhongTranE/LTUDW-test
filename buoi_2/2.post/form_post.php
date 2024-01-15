<?
    //Nhận thông tin gửi từ index.php (GET)
    $hoten =  $_POST['hoten'];
    $email =  $_POST['email'];
    $password =  $_POST['password'];

    //Kiểm tra password
    if($password) {
      echo "Chào! " . $hoten . " - " . $email;
    }else{
        echo "Vui lòng đăng ký thành viên";
    }
?>