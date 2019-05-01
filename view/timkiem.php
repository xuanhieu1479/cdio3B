<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	<title>Website tìm kiếm Homestay</title>
	<script type="text/javascript" src="../js/ThongTinCaNhanJS/jquery-3.3.1.min.js"></script>
</head>
<link href="../css/TimKiemCSS/timkiem.css" rel="stylesheet" type="text/css" media="all" />
<?php include "header.php"; ?>
<div style="margin-top: 100px"></div>
<div style="width: 80%; margin: auto">
  <table class="table table-borderless">
    <tbody>
      <tr>
        <td style="width: 20%"><img src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA4OC85MTEvb3JpZ2luYWwvZ29sZGVuLXJldHJpZXZlci1wdXBweS5qcGVn" height="225" width="400"></td>
        <td style="text-align: left">
          Tên Homestay</br>
          Thành phố</br>
          Địa chỉ</br>
          Giá</br>
        </td>
      </tr>
    </tbody>
  </table>
</div>
</html>
<?php
include "footer.html";
?>