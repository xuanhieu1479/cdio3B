<?php
session_start();
include "../controller/getallusers.php";
?>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/ThongTinCaNhanJS/jquery-3.3.1.min.js"></script>
<?php include "header.php";?>
<div style="margin-top: 100px">
    <table class="table table-borderless">
    <thead>
        <tr>
        <th scope="col" style="width: 25%">Email</th>
        <th scope="col" style="width: 35%">Chủ sở hữu</th>
        <th scope="col" style="width: 20%">Loại tài khoản</th>
        <th scope="col" style="width: 20%">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $user) {
            echo '<tr>';
            echo '<th scope="row">' . $user['email'] . '</th>';
            echo '<td>' . $user['ten'] . '</td>';
            echo '<td>' . $user['tenchucvu'] . '</td>';
            echo '<td>';
            if ($user['tinhtrang'] == 'Active') {
                echo '<form action="/controller/lockaccount.php" method="post">';                        
                echo '<input type="text" name="email" hidden value="' . $user['email'] . '">';
                echo '<input type="submit" class="btn btn-danger" value="Khóa tài khoản"/></form>';
            } else {
                echo '<form action="/controller/unlockaccount.php" method="post">';                        
                echo '<input type="text" name="email" hidden value="' . $user['email'] . '">';
                echo '<input type="submit" class="btn btn-success" value="Mở khóa tài khoản"/></form>';
            }
            echo '<form action="/controller/resetpassword.php" method="post">';                        
            echo '<input type="text" name="email" hidden value="' . $user['email'] . '">';
            echo '<input type="submit" class="btn btn-primary" value="Reset mật khẩu"/></form>';
            echo '</td></tr>';
        }
        ?>        
    </tbody>
    </table>
</div>
<?php include "footer.html";?>