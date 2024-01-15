<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>

<body>
    <h1>Lớp CT06N - Lập trình web PHP</h1>
    <form name="frmPOST" action="form_post.php" method="post">
        <fieldset>
            <legend>
                Thông tin người dùng
            </legend>

            <p>
                <label for="hoten">Họ tên:</label>
                <input type="text" name="hoten" id="hoten" placeholder="Nhập họ tên" />
            </p>

            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Nhập email" />
            </p>

            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Nhập password" />
            </p>

            <p>
                <input type="submit" value="Lưu">
                <input type="reset" value="Hủy">
            </p>

        </fieldset>
    </form>
</body>

</html>