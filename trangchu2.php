<?php if (session_id() == '' || !isset($_SESSION)) {
  session_start();
} ?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản trị viên</title>
</head>
<body>
  <div>
    <style type="text/css">
      * {
  margin: 0;
  padding: 0;
}
.button {
  
}
.button:hover {
 
}.button:active {
  
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
.h1{
  font-family: arial;
  width: 300px;
  height: 50px;
  padding-left: 10px;
  font-size: 20px;
  font-weight: bold;
  text-align: justify;
}
.h2{
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
p{
  padding-top: 10px;
  font-size: 16px;
  font-weight: normal;
}
.a3{
  font-size: 20px;
  text-decoration: none;
  font-style: bold;
  color: black;
  font-size: 20px;
}
.a3:hover{
  color: #CD2122;
}
.tr{
      margin: 0 0 30px;
    overflow: hidden;
    list-style-type: none;
}
    </style>
<div id="menu">
    
    <a href="trangchu2.php">Trang Chủ</a>
    |
    <a href="view/quanlysinhvien.php">Quản lý sinh viên</a>
    |
     <a href="view/quanlymonhoc.php">Quản lý môn học</a>
    |
    <a href="login.php">Đăng xuất</a>
    

</div>
</div>
<div >
<span style="z-index: -1; " id="news-block-title">TIN TỨC SỰ KIỆN</span>

<div align="center" style="padding-top: 20px">
  <table style="position: relative; top: 80px;" width="1000px">
    <tr class="tr">
      <td class="" rowspan="2"><img height="250px" src="img/h1.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://www.utt.edu.vn/utt/tin-tuc-su-kien/tap-huan-nghiep-vu-va-cac-quy-dinh-phap-luat-cho-nguoi-dieu-hanh-van-tai-a11980.html">
      Tập huấn Nghiệp vụ và các quy định pháp luật cho người điều hành vận tải</a>
        
                      <p>16/11/2019</p>
</td >
      <tr><td class="h2" >Ngày 16/11/2019 tại Phân hiệu Hà Nội, Trung tâm Hỗ trợ sinh viên khởi nghiệp và Quan hệ doanh nghiệp phối hợp với Hiệp hội Vận tải ô tô Việt Nam (VATA) tổ chức khai mạc Khóa Tập huấn nghiệp vụ và các quy định pháp luật cho người...</td></tr>
    </tr>

    <tr>
      <td class="" rowspan="2"><img height="250px" src="img/h2.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://www.utt.edu.vn/utt/tin-tuc-su-kien/doan-bo-giao-duc-va-the-thao-lao-tham-va-lam-viec-tai-truong-dai-hoc-cong-nghe-gtvt-a11975.html">
      Đoàn Bộ Giáo dục và Thể thao Lào thăm và làm việc tại Trường Đại học Công nghệ GTVT
Đoàn Bộ Giáo dục và Thể thao Lào thăm và làm việc tại Trường Đại học Công nghệ GTVT</a>
        
                      <p>15/11/2019</p>
</td >
      <tr><td class="h2" >Ngày 13/11/2019, Đoàn công tác của Bộ Giáo dục và Thể thao Nước CHDCND Lào do Bà Thongmy Duansakda - Phó Vụ trưởng Vụ Công tác sinh viên - Bộ Giáo dục và Thể thao làm Trưởng đoàn đã có buổi làm việc với Trường Đại học Công nghệ Giao...</td></tr>
    </tr>
<tr>
      <td class="" rowspan="2"><img height="250px" src="img/h3.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://utt.edu.vn/utt/tin-tuc-su-kien/toa-dam-trao-doi-hoc-tap-kinh-nghiem-cong-tac-trong-boi-canh-toan-cau-hoa-giao-duc-dai-hoc-a11967.html">
      Tọa đàm Trao đổi, học tập kinh nghiệm công tác trong bối cảnh toàn cầu hóa giáo dục đại học
Tọa đàm Trao đổi, học tập kinh nghiệm công tác trong bối cảnh toàn cầu hóa giáo dục đại học</a>
        
                      <p>14/11/2019</p>
</td >
      <tr><td class="h2" >Với xu hướng hội nhập và toàn cầu hóa, các quốc gia trong đó có Việt Nam đang có những bước đi thiết thực nhất để đổi mới và nâng cao chất lượng ngành nghề nhằm đáp ứng các yêu cầu thực tiễn và hội nhập quốc tế. Một trong...</td></tr>
    </tr>

<tr>
      <td class="" rowspan="2"><img height="250px" src="img/h4.jpg" alt=""></td>
      <td class="h1"><a class="a3" href="http://utt.edu.vn/utt/tin-tuc-su-kien/khai-giang-cao-hoc-khoa-51-va-trao-bang-thac-si-dot-2-2019-a11934.html">
      Khai giảng Cao học Khóa 5.1 và trao bằng Thạc sĩ đợt 2 - 2019
Khai giảng Cao học Khóa 5.1 và trao bằng Thạc sĩ đợt 2 - 2019</a>
        
                      <p>4/11/2019</p>
</td >
      <tr><td class="h2" >Hòa trong không khí HS-SV cả nước đang nô nức phấn khởi bước vào năm học mới, chào mừng các ngày lễ lớn của đất nước, của dân tộc, hướng tới kỷ niệm ngày Nhà giáo Việt Nam 20/11. Ngày 03/11/2019, Trường Đại học Công nghệ GTVT...</td></tr>
    </tr>
  </table>
</div>
</div>
</body>
</html>