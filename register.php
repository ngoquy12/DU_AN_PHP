 <!DOCTYPE html>
 <html lang="en">

 <head>
 	<meta charset="UTF-8">
 	<style type="text/css">
 		
 	</style>
 	<title>Đăng ký</title>
 	<meta charset="utf-8">
 </head>

 <body>
 		<div class="container">
 			<form class="" action="http://localhost/dangkyhoc/xulydangky.php" method="POST">
 				<h3>ĐĂNG KÝ</h3>
 				<div class="form-lable">Tên đăng nhập </div>
 				<div class="wrap-input100 validate-input" data-validate="Enter username">
 					<input class="input99" type="text" name="username">
 				</div>
 				<div class="form-lable">Mật khẩu</div>
 				<div class="wrap-input100 validate-input" data-validate="Enter password">
 					<input class="input99" type="password" name="password">
 				</div>
 				<div class="form-lable">Mã sinh viên</div>
 				<div class="wrap-input100 validate-input" data-validate="">
 					<input class="input99" type="text" name="masinhvien">
 				</div>
 				<div class="form-lable">Tên sinh viên</div>
 				<div class="wrap-input100 validate-input" data-validate="">
 					<input class="input99" type="text" name="hoten">
 				</div>
 				<div class="form-lable">Ngày sinh</div>
 				<div class="wrap-input100 validate-input" data-validate="">
 					<input class="input99" type="date" name="ngaysinh">
 				</div>
 				<div class="form-lable">Giới tính</div>
 				<div class="gt" data-validate="">
 					<input class="" type="radio" name="gioitinh" value="Nam" checked=""> Nam
 					<input type="radio" name="gioitinh" value="Nữ">Nữ
 				</div>
 				<div class="form-lable">Lớp</div>
 				<div class="gt" data-validate="">
				<select class="input98" name="lop">
					<?php
						include_once("publish/connect.php");
						$sql = "SELECT lop,tenkhoa FROM lophoc INNER JOIN khoa ON lophoc.makhoa = khoa.makhoa";
						$kq = mysqli_query($conn, $sql);
						include_once('model/lophoc_list.php');
						while ($row = mysqli_fetch_array($kq)) {
							echo "<option value=" . $row['lop'] . ">" . $row['lop'] . " - khoa: " . $row['tenkhoa'] . "</option>";
						}
						?>
 					</select>
 				</div>
 				<div class="form-lable">Quê quán</div>
 				<div class="wrap-input100 validate-input" data-validate="Enter username">
 					<input class="input99" type="text" name="quequan">
 				</div>
 				<div class="container-login101-form-btn" >
 					<input type="submit" class="login101-form-btn" name="dangky" value="Sign Up">
 				</div>
 				<div class="text-center p-t-90">
 					<p class="" style="color: white">Bạn đã có tài khoản?
 						<a class="" style="color: white" href="http://localhost/dangkyhoc/login.php">
 							<u>Đăng nhập</u>
 						</a>
 					</p>
 				</div>
 				</form>
 			</div>
 </body>
 </html>