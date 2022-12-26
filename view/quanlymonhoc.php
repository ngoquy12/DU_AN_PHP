    <?php if (session_id() == '' || !isset($_SESSION)) {
      session_start();
    } ?>
    <!DOCTYPE html>
    <html>

    <head>
      <!--     <link rel="stylesheet" href="css/qlbh.css" /> -->
      <title>Admin</title>
    </head>

    <body>
      <div>
        <style type="text/css">
          * {
            margin: 0;
            padding: 0;
          }

          .button {
            height: 36px;
            min-width: 80px;
            border-radius: 4px;
            color: #fff;
            background-color: #FF6600;
            outline: none;
            border: inherit;
            padding: 0 16px;
          }
          .button:hover{
            background-color: #7CCC00;
            cursor: pointer;
          }
          .button:active{
            background-color: #FF6600;
          }

          body {
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

          #menu a {
            color: white;
            padding: 15px;
            text-decoration: none;
            text-align: center;
          }
        </style>
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
      <div style="padding-top: 60px">

        <div align="center">
          <style type="text/css">
            #thongtin {
              color: black;
              margin: 30px;
              font-weight: bold;
            }
          </style>
        </div>
        <div>
          <div align="center" style="font-size: 30px; margin: 20px">DANH SÁCH MÔN HỌC</div>
          <div>
            <form action="" method="POST">

              <table align="center" width="100%" style="vertical-align: middle; border: 1px;border-color:#e5e5e5;  background: #e5e5e5;">
                <tbody>
                  <tr style="height: 50px; text-align: center; vertical-align:middle; background: #FF9900;">
                    <td><b>STT</b></td>
                    <td><b>Mã môn học</b></td>
                    <td><b>Tên môn học</b></td>
                    <td><b>Tên giảng viên</b></td>
                    <td><b>Số tín chỉ</b></td>
                    <td><b>Ghi chú</b></td>
                    <td><b>Sửa</b></td>
                    <td><b>Xóa</b></td>
                  </tr>
                  <?php
                  include_once("../publish/connect.php");
                  $sql = "SELECT * FROM monhoc ";
                  $kq = mysqli_query($conn, $sql);
                  $id = 0;
                  while ($row = mysqli_fetch_array($kq)) {
                    $mamonhoc = $row['mamonhoc'];
                    $id += 1;
                    echo "<tr style='background: #ffd4aa; height: 30px; vertical-align: middle;'>";
                    echo "<td style='text-align:center;'>" . $id . "</td>";
                    echo "<td style='text-align: center'>" . $row['mamonhoc'] . "</td>";
                    echo "<td style='text-align: center'>" . $row['tenmonhoc'] . "</td>";
                    echo "<td style='text-align: center'>" . $row['giangvien'] . "</td>";
                    echo "<td style='text-align: center'>" . $row['sotinchi'] . "</td>";
                    echo "<td style='text-align: center'>" . $row['hocphi'] . "</td>";
                    echo "<td align='center' ><a href='../Controller/update_monhoc.php?mamonhoc=" . $mamonhoc . "'><img align='center' src='../img/edit.gif'></a></td>";
                    echo "<td align='center'><a href='../Controller/delete_monhoc.php?mamonhoc=" . $mamonhoc . "'><img align='center' src='../img/delete.gif'></a></td>";
                    echo "</tr>";
                    # code...
                  }
                  ?>
                </tbody>
              </table>
            </form>
          </div>
          <div align="center">
            <form method="POST" action="../controller/add_monhoc.php" style="margin: 10px"><input class="button" type="submit" name="" value="Thêm môn học"></form>
          </div>
    </body>

    </html>