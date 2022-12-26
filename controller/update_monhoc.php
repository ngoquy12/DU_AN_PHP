<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa môn học</title>
  <style type="text/css">
     body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .form{
            border: 1px solid #8f8686;
            padding: 15px;
            border-radius: 4px;
        }
        input {
            min-width: 200px;
        }
        h3{
          text-align: center;
        }

</style>
</head>
<body>
<?php
  $mamonhoc=$_GET['mamonhoc'];
  include_once("../publish/connect.php");


  $sql="SELECT * From monhoc Where mamonhoc='$mamonhoc'";
  $kq=mysqli_query($conn,$sql);
  
  $ar=mysqli_fetch_array($kq);
?>
       
           <form method="post" action="../model/xulyupdate.php" class="form">
            <h3>SỬA MÔN HỌC</h3>
            <table>
    	      <tr>
            <td><input type="hidden" name="mamonhoc" value="<?php echo $mamonhoc ?>"></td>
           </tr>
            <tr>
            <th>Tên Môn Học :</th>
            <td><input type="text" name="tenmonhoc" value="<?php echo $ar['tenmonhoc'] ?>"></td>
        </tr>
         <tr>
            <th>Giảng Viên:</th>
            <td><input type="text" name="giangvien" value="<?php echo $ar['giangvien'] ?>"></td>
        </tr>
        <tr>
            <th>Số tín chỉ:</th>
            <td><input type="text" name="sotinchi" value="<?php echo $ar['sotinchi'] ?>"></td>
        </tr>
        <tr>
            <th>Học phí:</th>
            <td><input type="text" name="hocphi" value="<?php echo $ar['hocphi'] ?>"></td>
        </tr>

       <tr>
           
           <td></td>
           <td>    <button type="submit" class="button">Sửa</button></td>
       </tr>
    </table>

        </form>
</body>
</html>