<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
<!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
    <title>Đăng ký học</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}
.td{
  padding-left: 10px;
}
body{
  font-family: sans-serif;

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
  padding: 15px;
  text-decoration: none;
  text-align: center;


}
    </style>

<div id="menu">
 
    <a href="../trangchu.php">Trang Chủ</a>
    |
    <a href="../view/dangky.php">Đăng ký học phần</a>
    |
     <a href="dsdangky.php">Thời khóa biểu</a>
    |
    <a href="../view/profile.php"> <?php 
      include('../publish/connect.php');
     
    //Lấy dữ liệu nhập vào
    $username = $_SESSION['username'] ;

    $sql="SELECT * FROM sinhvien WHERE username='$username'";
    $kq=mysqli_query($conn,$sql);
    if (mysqli_num_rows($kq) > 0) {
      {while ($row= mysqli_fetch_assoc($kq)) {
            # code...
            echo $row['hoten']; 
          }
        }
     }
       ?></a>
       |
    <a href="../login.php">Đăng Xuất</a>
</div>
</div>
<div style="padding-top: 60px">
<div align="center" style="font-weight: bold; font-size: 30px; color: black; margin: 15px">ĐĂNG KÝ HỌC PHẦN</div>
<div align="center">
  <style type="text/css">
    #thongtin{
      color: black;
      margin: 30px;
      font-weight: bold;
    }
  </style>
  <div id="thongtin">
    <?php 
      include('../publish/connect.php');
     
    //Lấy dữ liệu nhập vào
    $username = $_SESSION['username'] ;

    $sql="SELECT * FROM sinhvien WHERE username='$username'";
    $kq=mysqli_query($conn,$sql);
    if (mysqli_num_rows($kq) > 0) {
      {while ($row= mysqli_fetch_assoc($kq)) {
            # code...
            echo "Họ tên: ".$row['hoten']."<br>";

            echo "Mã Sinh Viên: ".$row['masinhvien']."<br>";
            echo "Lớp: ".$row['lop'];
          }
          }
    }
       ?>
   </div>
</div>

<div style="position: relative; left: 50px">
<span style="font-size: 20px">
 <b>DANH SÁCH HỌC PHẦN - KHOA: 
  
<?php
$username = $_SESSION['username'] ;
include_once("../publish/connect.php");
      
  $sql="SELECT  tenkhoa
  FROM sinhvien INNER JOIN lophoc
        on sinhvien.lop=lophoc.lop
        inner join khoa
        on lophoc.makhoa=khoa.makhoa
        
        where username='$username'";
  $kq=mysqli_query($conn,$sql);
                                    
  if (mysqli_num_rows($kq) > 0) {
      {while ($row= mysqli_fetch_assoc($kq)) {
        echo $row['tenkhoa'];
          }}
        }
?></b> 
</span>
<span style="font-size: 20px; position: relative; top: 10px">
 <form action="dangky_find.php" method="post">
Tìm kiếm:
<input type="text" name="search" id="">
<input type="submit" name="tim" id="" value="Tìm kiếm">
</form>
</span>

<form action="">

    <table width="1500px" style="padding-top: 20px">
      <tr align="center" style="height: 30px; width: 500px; text-align: center;background: #009AFF; color: white;">
        <td style="width: 80px"><b>Số thứ tự</b></td>
        <td style="width: 500px" ><b>Tên môn học</b></td>
          <td ><b>Tên giảng viên</b></td>
          <td style="width: 80px" ><b>Số tín chỉ</b></td>
          <td width="200px"><b>Học phí</b></td>
           <td width="200px"><b>Thêm môn học</b></td>
          <td></td>
      </tr>
      <?php 
      $username = $_SESSION['username'] ;
      include_once("../publish/connect.php");
      
    $sql="SELECT  *
   FROM sinhvien INNER JOIN lophoc
        on sinhvien.lop=lophoc.lop
        inner join khoa
        on lophoc.makhoa=khoa.makhoa
        inner join monhoc
        on khoa.makhoa = monhoc.makhoa
        where username='$username'";
   $kq=mysqli_query($conn,$sql);
   $id=0;

    while ($row=mysqli_fetch_array($kq)) {
      $mamonhoc = $row['mamonhoc'];
       $sinhvien = $row['masinhvien'];
        $tenmonhoc = $row['tenmonhoc'];
        $giangvien = $row['giangvien'];
        $sotinchi = $row['sotinchi'];
        $hocphi = $row['hocphi'];
      $id+=1;
      echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
      echo "<td style='text-align:center;'>".$id."</td>";
      echo "<td class='td'>".$row['tenmonhoc']."</td>";
      echo "<td class='td'>".$row['giangvien']."</td>";
      echo "<td align='center'>".$row['sotinchi']."</td>";
      echo "<td class='td'>".$row['hocphi']."</td>";
      echo "<td width='100px' align='center'><a href='../model/xldkmonhoc.php?mamonhoc=".$mamonhoc."'> <img align='center' width='15px' src='../img/add.png'></a></td>";
      echo '</tr>';
    }
       ?>
    </table>
   </form>
</body>
</html>