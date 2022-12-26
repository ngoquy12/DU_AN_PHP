<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/util.css">
  <!-- <link rel="stylesheet" type="text/css" href="../css/main.css"> -->
  <title></title>
  <style type="text/css">
    .container-login101 {
      display: block;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: -webkit-linear-gradient(top, #f6832d, rgba(255, 87, 34, 0.72));
    }

    .wrap-login101 {
      width: 100%;
      overflow: hidden;
      padding: 24px;
      background: #9152f8;
      background: -webkit-linear-gradient(top, #FFB6C1, rgba(0, 0, 0, .15));
      position: relative;
    }

    td {
      color: black;
      font-size: 24px;
    }

    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
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

    .button {
      height: 36px;
      min-width: 80px;
      border-radius: 4px;
      outline: none;
      border: inherit;
      color: #fff;
      background-color: green;
      margin-top: 10px;
    }
  </style>

  <div id="menu">
    <a href="../trangchu.php">Trang Chủ</a>
    |
    <a href="../view/dangky.php">Đăng ký học phần</a>
    |
    <a href="../view/dsdangky.php">Thời khóa biểu</a>
    |
    <a href="../view/profile.php"> <?php
                                    include('../publish/connect.php');

                                    //Lấy dữ liệu nhập vào
                                    $username = $_SESSION['username'];

                                    $sql = "SELECT * FROM sinhvien WHERE username='$username'";
                                    $kq = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($kq) > 0) { {
                                        while ($row = mysqli_fetch_assoc($kq)) {
                                          # code...
                                          echo $row['hoten'];
                                        }
                                      }
                                    }
                                    ?></a>
    |
    <a href="../login.php">Đăng Xuất</a>
  </div>
  <div class="limiter">
    <div class="wrap-login101">
      <form class="" action="login.php" method="POST">
        <span class="">
          <div align="center"> <span class="">
            </span></div>
        </span>
        <div align="center" style="color: black; font-size: 32px; font-weight: bold; padding: 20px;font-family: arial">
          <?php
          include('../publish/connect.php');

          //Lấy dữ liệu nhập vào
          $username = $_SESSION['username'];

          $sql = "SELECT * FROM sinhvien WHERE username='$username'";
          $kq = mysqli_query($conn, $sql);
          if (mysqli_num_rows($kq) > 0) { {
              while ($row = mysqli_fetch_assoc($kq)) {
                # code...
                echo $row['hoten'];
              }
            }
          }
          ?>
        </div>
        <div align="center">
          <table align="center">
            <tr>
              <td class="a1">Tên đăng nhập: </td>
              <td class="a2"><?php
                include('../publish/connect.php');
                //Lấy dữ liệu nhập vào
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM sinhvien WHERE username='$username'";
                $kq = mysqli_query($conn, $sql);
                if (mysqli_num_rows($kq) > 0) { {
                    while ($row = mysqli_fetch_assoc($kq)) {
                      # code...
                      echo $row['username'];
                    }
                  }
                }
                ?></td>
            </tr>
            <tr>
              <td class="a1">
                <div>Mã sinh viên: </div>
              </td>
              <td class="a2"><?php
                include('../publish/connect.php');
                //Lấy dữ liệu nhập vào
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM sinhvien WHERE username='$username'";
                $kq = mysqli_query($conn, $sql);
                if (mysqli_num_rows($kq) > 0) { {
                    while ($row = mysqli_fetch_assoc($kq)) {
                      # code...
                      echo $row['masinhvien'];
                    }
                  }
                }
                ?></td>
            </tr>
            <tr>
              <td class="a1">Lớp: </td>
              <td class="a2"><?php
                include('../publish/connect.php');
                //Lấy dữ liệu nhập vào
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM sinhvien WHERE username='$username'";
                $kq = mysqli_query($conn, $sql);
                if (mysqli_num_rows($kq) > 0) { {
                    while ($row = mysqli_fetch_assoc($kq)) {
                      # code...
                      echo $row['lop'];
                    }
                  }
                }
                ?></td>
            </tr>
            <tr>
              <td class="a1">Ngày sinh: </td>
              <td class="a2"><?php
                  include('../publish/connect.php');
                  //Lấy dữ liệu nhập vào
                  $username = $_SESSION['username'];
                  $sql = "SELECT * FROM sinhvien WHERE username='$username'";
                  $kq = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($kq) > 0) { {
                      while ($row = mysqli_fetch_assoc($kq)) {
                        # code...
                        echo $row['ngaysinh'];
                      }
                    }
                  }
                  ?></td>
            <tr>
              <td class="a1">Giới Tính: </td>
              <td class="a2"><?php
                include('../publish/connect.php');
                //Lấy dữ liệu nhập vào
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM sinhvien WHERE username='$username'";
                $kq = mysqli_query($conn, $sql);
                if (mysqli_num_rows($kq) > 0) { {
                    while ($row = mysqli_fetch_assoc($kq)) {
                      # code...
                      echo $row['gioitinh'];
                    }
                  }
                }
                ?></td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td class="a1">Quê Quán: </td>
              <td class="a2"><?php
                include('../publish/connect.php');
                //Lấy dữ liệu nhập vào
                $username = $_SESSION['username'];
                $sql = "SELECT * FROM sinhvien WHERE username='$username'";
                $kq = mysqli_query($conn, $sql);
                if (mysqli_num_rows($kq) > 0) { {
                    while ($row = mysqli_fetch_assoc($kq)) {
                      # code...
                      echo $row['quequan'];
                    }
                  }
                }
                ?></td>
            </tr>
          </table>
        </div>
      </form>
      <div align="center">
        <table align="center">
          <tr>
            <td colspan="2" class="a2">
              <?php
              $username = $_SESSION['username'];
              include_once("../model/sinhvien_list.php");

              $sql = "SELECT * FROM sinhvien WHERE username='$username'";
              $kq = mysqli_query($conn, $sql);
              if (mysqli_num_rows($kq) > 0) {

                while ($row = mysqli_fetch_array($kq)) {
                  $masinhvien = $row['masinhvien'];
                  echo "<button class ='button' type =''><a style='text-decoration:none; color: #fff;' href='../Controller/update_sinhvien.php?masinhvien=" . $masinhvien . "'>Chỉnh sửa</a></button>";
                }
              }
              ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  </body>
</html>