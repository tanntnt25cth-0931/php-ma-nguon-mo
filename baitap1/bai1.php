<?php
    $chieudai = "";
    $chieurong = "";
    $dientich = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $chieudai = $_POST["chieudai"];
        $chieurong = $_POST["chieurong"];
        $dientich = $chieudai * $chieurong;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1</title>
    <style>
    body {
        height: 100vh;
        margin: 0;
        display: flex;
        justify-content: center;     /* căn form ra giữa theo chiều ngang */
        align-items: center;         /* căn form ra giữa theo chiều dọc */
        font-family: Tahoma, sans-serif;
        font-size: 13px;
    }

    form {
        width: 320px;
        padding: 10px;
        background-color: #fff5c4;   /* nền vàng nhạt của form */
    }

    h2 {
        margin: 0;
        padding: 8px;
        background-color: #fcc850;   /* thanh tiêu đề vàng cam */
        color: #b5452a;              /* chữ đỏ nâu */
        text-align: center;
        font-style: italic;
        font-size: 20px;
    }

    table {
        margin: 10px auto;           /* bảng nằm giữa form */
    }

    td {
        padding: 5px;
    }

    #dientich {
        background-color: #fdd9de;   /* ô diện tích màu hồng */
    }
    </style>
</head>
<body>
    <form name="frmDienTich" method="post" action="bai1.php">
        <h2>Diện tích hình chữ nhật</h2>
        <table>
            <tr>
                <td>Chiều dài: </td>
                <td>
                    <input type="text" name="chieudai" id="chieudai" value="<?php echo $chieudai; ?>">
                </td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td>
                    <input type="text" name="chieurong" id="chieurong" value="<?php echo $chieurong; ?>">
                </td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dientich" id="dientich" value="<?php echo $dientich; ?>" readonly></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnTinh" value="Tính"></td>
            </tr>
        </table>
        
        

    </form>

    
    
</body>
</html>