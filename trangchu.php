<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>

<head>
  <title>Trang chủ</title>
</head>

<body>
  <div>
    <style type="text/css">
      * {
        margin: 0;
        padding: 0;
      }

      body {
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

      #menu a {
        color: white;
        padding: 10px;
        text-decoration: none;
        text-align: center;
      }

      .h1 {
        font-family: arial;
        width: 300px;
        height: 50px;
        padding-left: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: justify;
      }

      .h2 {
        font-family: arial;
        width: 700px;
        height: 150px;
        padding-left: 10px;
        font-size: 18px;
        text-align: justify;
        padding-top: 5px;
      }

      #news-block-title {
        font-size: 18px;
        border-bottom: 1px solid #cd2122;
        position: relative;
        left: 300px;
        font-size: 30px;
        top: 50px;

      }

      p {
        padding-top: 10px;
        font-size: 16px;
        font-weight: normal;
      }

      .a3 {
        font-size: 20px;
        text-decoration: none;
        font-style: bold;
        color: black;
        font-size: 20px;
      }

      .a3:hover {
        color: #CD2122;
      }

      .tr {
        margin: 0 0 30px;
        overflow: hidden;
        list-style-type: none;
      }
    </style>

    <div id="menu">
      <a href="trangchu.php">Trang Chủ</a>
      |
      <a href="view/dangky.php">Đăng ký học phần</a>
      |
      <a href="view/dsdangky.php">Thời khóa biểu</a>
      |
      <a href="view/profile.php">
        <?php
        include('publish/connect.php');
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
        ?></a>|<a href="login.php">Đăng Xuất</a>
    </div>
  </div>
  <div>
    <span style="z-index: -1; " id="news-block-title">TIN TỨC SỰ KIỆN</span>

    <div align="center" style="padding-top: 20px">
      <table style="position: relative; top: 80px;" width="1000px">
        <tr class="tr">
          <td class="" rowspan="2"><img height="250px" src="https://fbu.edu.vn/wp-content/uploads/2022/12/le-ky-niem-12-nam-ngay-thanh-lap-truong-dai-hoc-tai-chinh-ngan-hang-ha-noi-7.jpg" alt=""></td>
          <td class="h1"><a class="a3" href="https://fbu.edu.vn/le-ky-niem-12-nam-ngay-thanh-lap-truong-dai-hoc-tai-chinh-ngan-hang-ha-noi/">
              Lễ Kỷ Niệm 12 năm ngày thành lập Trường Đại học Tài chính – Ngân hàng Hà Nội</a>
            <p>22/12/2019</p>
          </td>
        <tr>
          <td class="h2">
            Ngày 21/12/2022, Trường Đại học Tài chính – Ngân hàng Hà Nội long trọng tổ chức Lễ Kỷ Niệm 12 năm ngày thành lập Trường (21/12/2010 – 21/12/2022).
            Tham dự Lễ Kỷ Niệm có đông đủ các vị Khách quý, tập thể Cán bộ – Giảng viên Nhà trường.
            Về phía Khách mời gồm có các cựu Cán bộ – Giảng viên, Sinh viên; Đại diện các Nhà thầu đang thi công xây dựng Dự án đầu tư xây dựng Trường; Đại diện các đơn vị đối tác;…
          </td>
        </tr>
        </tr>
        <tr>
          <td class="" rowspan="2"><img height="250px" src="https://fbu.edu.vn/wp-content/uploads/2022/11/20.11.jpg" alt=""></td>
          <td class="h1"><a class="a3" href="https://fbu.edu.vn/le-ky-niem-40-nam-ngay-nha-giao-viet-nam-20-11-20-11-1982-20-11-2022/">
              LỄ KỶ NIỆM 40 NĂM NGÀY NHÀ GIÁO VIỆT NAM 20/11 (20/11/1982 – 20/11/2022)</a>
            <p>20/11/2019</p>
          </td>
        <tr>
          <td class="h2">Tháng 11 lại về trong không khí hân hoan của cả nước hướng về ngày nhà giáo Việt Nam 20/11, ngày mà cả xã hội trân trọng, tôn vinh công lao người thầy. Hoà trong niềm vui chung đó, Sáng ngày 18/11/2022, Trường Đại học Tài chính – Ngân hàng Hà Nội long trọng tổ chức lễ kỉ niệm 40 năm ngày Nhà giáo Việt
            Nam 20/11 (20/11/1982 – 20/11/2022) nhằm tôn vinh các nhà giáo qua nhiều thế hệ của nhà trường, tôn vinh sự nghiệp trồng người.</td>
        </tr>
        </tr>
        <tr>
          <td class="" rowspan="2"><img height="250px" src="https://fbu.edu.vn/wp-content/uploads/2022/11/20.11.jpg" alt=""></td>
          <td class="h1"><a class="a3" href="http://utt.edu.vn/utt/tin-tuc-su-kien/toa-dam-trao-doi-hoc-tap-kinh-nghiem-cong-tac-trong-boi-canh-toan-cau-hoa-giao-duc-dai-hoc-a11967.html">
              Tọa đàm Trao đổi, học tập kinh nghiệm công tác trong bối cảnh toàn cầu hóa giáo dục đại học
              Tọa đàm Trao đổi, học tập kinh nghiệm công tác trong bối cảnh toàn cầu hóa giáo dục đại học</a>
            <p>14/11/2019</p>
          </td>
        <tr>
          <td class="h2">Với xu hướng hội nhập và toàn cầu hóa, các quốc gia trong đó có Việt Nam đang có những bước đi thiết thực nhất để đổi mới và nâng cao chất lượng ngành nghề nhằm đáp ứng các yêu cầu thực tiễn và hội nhập quốc tế. Một trong...</td>
        </tr>
        </tr>
      </table>
    </div>
  </div>
</body>

</html>