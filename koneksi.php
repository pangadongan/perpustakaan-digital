<?
phpinclude "koneksi.php";
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
&koneksi = mysqli_connect('localhost','root',','ukk_perpus');?>