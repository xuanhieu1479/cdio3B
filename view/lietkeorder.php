<?php
session_start();
include "../controller/listorder.php";
?>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/ThongTinCaNhanJS/jquery-3.3.1.min.js"></script>
<?php include "header.php";?>
<div style="margin-top: 100px">
    <table class="table table-borderless">
    <thead>
        <tr>
        <th scope="col" style="width: 20%">Tên khách hàng</th>
        <th scope="col" style="width: 15%">Số điện thoại</th>
        <th scope="col" style="width: 20%">Homestay</th>
        <th scope="col" style="width: 15%">Phòng</th>
        <th scope="col" style="width: 20%">Thumbnail</th>
        <th scope="col" style="width: 10%">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $order) {
            echo '<tr>';
            echo '<th scope="row">' . $order['tenkh'] . '</th>';
            if ($order['sdt'] == null) echo '<td>Chưa cập nhật</td>';
            else echo '<td>' . $order['sdt'] . '</td>';
            echo '<td>' . $order['tenhomestay'] . '</td>';
            switch ($order['songuoitoida']) {
                case 1 :
                    echo '<td>Phòng đơn</td>';
                    break;
                case 2 :
                    echo '<td>Phòng đôi</td>';
                    break;
                default :
                    echo '<td>Phòng ' . $order['songuoitoida'] . ' người</td>';
            }            
            echo '<td><img src="' . $order['thumbnail'] . '" height="100" width="200"><td>';
            echo '<td>';
            echo '<form action="/controller/xacnhanorder.php" method="post">';                        
            echo '<input type="text" name="id" hidden value="' . $order['iddatphong'] . '">';
            echo '<input type="submit" class="btn btn-success" value="Xác nhận"/></form>';
            echo '<form action="/controller/tuchoiorder.php" method="post">';                        
            echo '<input type="text" name="id" hidden value="' . $order['iddatphong'] . '">';
            echo '<input type="submit" class="btn btn-danger" value="Từ chối"/></form>';
            echo '</td></tr>';
        }
        ?>        
    </tbody>
    </table>
</div>
<?php include "footer.html";?>