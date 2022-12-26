<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
    <title>Thời khoá biểu</title>
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
<div align="center" style="font-weight: bold; font-size: 30px; color: black; margin: 15px">THÔNG TIN HỌC PHẦN</div>
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

            echo "Mã sinh Viên: ".$row['masinhvien']."<br>";
            echo "Lớp: ".$row['lop'];
          }
        }
      }
       ?>
   </div>
</div>
<div>
  <div >
    <style type="text/css">
      #them{
        color: black;
        position: relative;
        left: 50px;
      }
    </style>
</div>
</div>
   <div align="center" style="color: #00A005; font-size: 25px; margin: 20px">
      DANH SÁCH MÔN ĐÃ ĐĂNG KÝ
   </div>
   <div style="position: relative;left: 5px"> 
<div align="center">
   <table align="center" width="100%" style=" border: 1px;border-color:black;  width: 1500px;">
    <tbody>
      <tr align="center" style="height: 30px; width: 100px; text-align: center;background: #009AFF; color: white;">
        <td><b>STT</b></td>
        <td style="width: 100px"><b>Mã môn học</b></td>
        <td style="width: 500px" ><b>Tên môn học</b></td>
          <td ><b>Tên giảng viên</b></td>
          <td style="width: 100px" ><b>Số tín chỉ</b></td>
          <td ><b>Ghi chú</b></td>
          <td ><b>Xóa</b></td>
      </tr>
      
      <?php 
        $username = $_SESSION['username'] ;
        include_once("../publish/connect.php");
  
  $sql="SELECT  *
        FROM sinhvien INNER JOIN dsdangky
        on sinhvien.masinhvien=dsdangky.masinhvien
       WHERE username='$username' ";
  $kq=mysqli_query($conn,$sql);

                $id=0;
                while ($row=mysqli_fetch_array($kq)) {
                    $mamonhoc = $row['mamonhoc'];
                    $id+=1;
                    echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
                        echo "<td  style='text-align:center;'>".$id."</td>";
                         echo "<td class='td'>".$row['mamonhoc']."</td>";
                        echo "<td class ='td'>".$row['dstenmonhoc']."</td>";
                        echo "<td class='td'>".$row['dsgiangvien']."</td>";
                        echo "<td align='center'>".$row['dssotinchi']."</td>";
                        echo "<td class='td'>".$row['dshocphi']."</td>";
                  
                        echo "<td align='center'><a href='../Controller/delete_dsdangky.php?mamonhoc=".$mamonhoc."'><img align='center' src='../img/delete.gif'></a></td>";
                    echo "</tr>";   
                    # code...
                }
       ?>
    </tbody>
  </table>
 </div>
</div>
</div>
</body>
</html>