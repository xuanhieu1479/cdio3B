<?php
session_start();
include_once "data/connection.php";

function LogIn($email, $ten, $sdt, $tinhtrang) {
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['ten'] = $ten;
    $_SESSION['sdt'] = $sdt;
    $_SESSION['tinhtrang'] = $tinhtrang;  
}

function LogOut() {
    $_SESSION['logged_in'] = null;
    $_SESSION['email'] = null;
    $_SESSION['ten'] = null;
    $_SESSION['sdt'] = null;
    $_SESSION['tinhtrang'] = null;  
}