<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
     
	<title>ADMIN</title>
	<meta charset="utf-8">
<style type="text/css">
  .td{
  padding-left: 10px;
 }
 body{
  font-family: sans-serif;
  margin: 0;
  padding: 0;
}
#menu {
    font-size: 15px;
    color: white;
    padding: 5px 5px 0 5px;
    background-color: #FF6600;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    position: sticky;
    top: 0;
}
#menu a{
  color: white;
  padding: 10px;
  text-decoration: none;
  text-align: center;
}
.button {
 
}
.button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.button:active {
  position:relative;
  top:1px;
}
/* This button was generated using http://tools.ngoisaoso.vn/css3button/ */

</style>
	</head>
<body>
    <div id="menu">
        <a href="../trangchu.php">Trang Chủ</a>
    |
    <a href="quanlysinhvien.php">Quản lý sinh viên</a>
    |
     <a href="quanlymonhoc.php">Quản lý môn học</a>
    |
    <a href="../login.php">Đăng xuất</a>        

    </div>
    </div>
<div align="center" style="font-weight: 20px; margin: 20px">DANH SÁCH SINH VIÊN</div>
<div>
   <table align="center" width="100%" style="vertical-align: middle; border: 1px;border-color:#e5e5e5;  background: #e5e5e5;">
		<tbody>
			<tr style="height: 50px; text-align: center; vertical-align:middle; background: #FF9900;">
				<td ><b>STT</b></td>
        <td><b>Username</b></td>
         <td><b>Password</b></td>
				 <td><b>Mã sinh viên</b></td>
          <td ><b>Họ tên</b></td>
          <td  width="80px" ><b>Giới tinh</b></td>
          <td ><b>Ngày Sinh</b></td>
          <td ><b>Lớp</b></td>
          <td ><b>Quê Quán</b></td>
          <td ><b>Sửa</b></td>
          <td  class='td'><b>Xóa</b></td>
			</tr>
    
          
       
<?php
                include_once("../model/sinhvien_list.php");
                

                $id=0;
                if (mysqli_num_rows($kq)>0) {
                while ($row=mysqli_fetch_array($kq)) {
                    $msv = $row['masinhvien'];
                    $id+=1;
                    echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
                        echo "<td style='text-align:center;'>".$id."</td>";
                        echo "<td class='td'>".$row['username']."</td>";
                        echo "<td class='td'>".$row['password']."</td>";
                        echo "<td class='td'>".$row['masinhvien']."</td>";
                        echo "<td class='td'>".$row['hoten']."</td>";
                        echo "<td class='td'>".$row['gioitinh']."</td>";
                        echo "<td class='td'>".$row['ngaysinh']."</td>";
                        echo "<td class='td'>".$row['lop']."</td>";
                        echo "<td class='td'>".$row['quequan']."</td>";
                      
                        
                        echo "<td align='center' ><a href='../Controller/sinhvien.php?masinhvien=".$msv."'><img align='center' src='../img/edit.gif'></a></td>";
                        echo "<td align='center'><a href='../Controller/sinhviendelete.php?masinhvien=".$msv."'><img align='center' src='../img/delete.gif'></a></td>";
                    echo "</tr>";   
                    # code...
                }
              }

?>

    </tbody>
</table>
    

</div>
 <div align="center">
  <form method="POST"  action="../register.php" style="margin: 10px"><input class="button" type="submit" name="" value="Thêm sinh viên"></form>
  
</div> 
</body>
</html>
