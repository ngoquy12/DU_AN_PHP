<!DOCTYPE html>
<html>
    <head>
        <title>Thêm môn học</title>
        <meta charset="UTF-8">
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

</style>
    </head>
    <body>
           <form method="post" action="../model/xulymonhoc.php" class="form">
                <h3 style="text-align: center;">THÊM MÔN HỌC </h3>
            <table align="center"> 
                <tr>
                    <td>Mã Môn học:</td>
                    <td><input type="text" name="mamonhoc" ></td>
                </tr>
                <tr>
                    <td>Môn học:</td>
                    <td><input type="text" name="tenmonhoc" ></td>
                </tr>
                 <tr>
                    <td>Khoa:</td>
                    <td><select class="" name="makhoa">
                           <?php
                           include_once("../publish/connect.php");
  
                                $sql="SELECT * FROM monhoc INNER JOIN khoa ON monhoc.makhoa = khoa.makhoa";
                                $kq=mysqli_query($conn,$sql);
                                include_once('../model/monhoc_list.php');
                                while ($row=mysqli_fetch_array($kq)) {
                                     echo "<option value=".$row['makhoa'].">khoa:   ".$row['tenkhoa']."</option>";
                                }
                            ?>
                        </select>
                      </td>
                </tr>
                <tr>
                    <td>Giảng Viên:</td>
                    <td><input type="text" name="giangvien"></td>
                </tr>
                <tr>
                    <td>Số tín chỉ:</td>
                    <td><input type="text" name="sotinchi"></td>
                </tr>
                <tr>
                    <td>Học phí:</td>
                    <td><input type="text" name="hocphi"></td>
                </tr>    
                <tr>
                     <td></td>
                     <td align="center" ><input type="submit" class="button" name="btn_themmonhoc" value="Thêm"></td>
                </tr>
            </table>
        </form>
    </body>
</html>