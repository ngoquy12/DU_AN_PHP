 <?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
 <!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<style type="text/css">
  .input98{
    font-family: Poppins-Regular;
    font-size: 18px;
    color: #fff;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 25px;
    /* background: #e1c8c3; */
    padding-left: 5px;
    border-color: white;

    }
	.button {
    height: 36px;
  min-width: 80px;
  border-radius: 4px;
  color: #fff;
  background-color: green;
  margin-top: 10px;
}

		.input99{
  font-family: arial;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 45px;
    background: transparent;
    padding-left: 5px;
		}
		.wrap-login101 {
    width: 500px;
    border-radius: 10px;
    overflow: hidden;
    padding: 55px 55px 37px 55px;
    background: #9152f8;
    /* background: -webkit-linear-gradient(top, #f6832d, rgba(255, 87, 34, 0.72)); */
}
.login101-form-btn {
    
    
}
	</style>
	<title>Chỉnh sửa thông tin</title>
	<meta charset="utf-8">
</head>
<body>
<?php

  $masinhvien=$_GET['masinhvien'];
  include_once('../publish/connect.php');


  $sql="SELECT * From sinhvien Where masinhvien='$masinhvien'";
  $kq=mysqli_query($conn,$sql);
  
  $ar=mysqli_fetch_array($kq,);

?>
				<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login101">
				<form class="" action="../model/xulysinhvien.php" method="POST" enctype="multipart/form-data">
					<span class="">
						<div align="center" style="margin: 40px">	<span class="" >
					</span></div>

					<div></div>
					
					<div >
						<input class="input99" type="hidden" name="username">
						
					</div>
					
					<div >
						<input class="input99" type="hidden" name="password">
						
					</div>
					
					<div>
						<input class="input99" type="hidden" name="masinhvien" value="<?php echo $masinhvien ?>">
						
					</div>
					<div style="color: white; margin: 2px;">Họ tên:</div>
					<div class="wrap-input100 validate-input" >
						<input class="input99" type="text" name="hoten" value="<?php echo $ar['hoten'] ?>">
						
					</div>
					<div style="color: white; margin: 2px;">Ngày sinh:</div>
					<div class="wrap-input100 validate-input" >
						<input class="input99" type="date" name="ngaysinh" value="<?php echo $ar['ngaysinh'] ?>">
						
					</div>
          <div style="color: white; margin: 2px;">Giới Tính:</div>
          <div class="wrap-input100 validate-input" >
           <div class="gt" data-validate = "">
            <input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
                <input  type="radio" name="gioitinh" value="Nữ">Nữ
            
          </div>
            
          </div>
					<div style="color: white; margin: 2px;">Lớp:</div>
					<div class="wrap-input100 validate-input" >
						<select class='input98' name='lop'>
                           <?php
                           include_once('../publish/connect.php');
  
             $sql='SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa';
             $kq=mysqli_query($conn,$sql);
                                include_once('model/lophoc_list.php');
                                while ($row=mysqli_fetch_array($kq)) {
                                     echo "<option value=".$row['lop'].">".$row['lop']." - khoa: ".$row['tenkhoa']."</option>";
                                }
                            ?>
                        </select>
					</div>
					<div style="color: white; margin: 2px;">Quê quán:</div>
					<div class="wrap-input100 validate-input" >
						<input class="input99" type="text" name="quequan" value="<?php echo $ar['quequan'] ?>">
					</div>
					<div class="container-login101-form-btn" align="center">
						<input type="submit"  class="button" name="update" value="Thay đổi">
					</div>		
				</form>
			</div>
		</div>
	</div>
</body>
</html>
