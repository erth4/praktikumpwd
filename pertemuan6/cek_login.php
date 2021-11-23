<?php
session_start();
include __DIR__ . DIRECTORY_SEPARATOR . 'koneksi.php';

$id_user = $_POST['id_user'];
$password = md5($_POST['passwd']);


$sql = "SELECT * FROM users WHERE id_user = '$id_user' AND password = '$password';";

if ($_POST['captcha_code'] == $_SESSION['captcha_code']) {

    $login = mysqli_query($con, $sql);

    $ketemu = mysqli_num_rows($login);

    $r = mysqli_fetch_array($login);

    if ($ketemu > 0) {
        
        $_SESSION['id_user'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];

        echo 'User Berhasil Login<br/>';
        echo 'Id user : ' . $_SESSION['id_user'] . '<br/>';
        echo 'Password : ' . $_SESSION['passuser'] . '<br/>';
        echo '<a href="logout.php">Logout</a><br/>';

    } else {

        echo 'Login gagal! Username dan Password tidak benar.<br/>';
        echo '<a href="form_login.php">Ulangi Lagi</a><br/>';


    }

    mysqli_close($con);

} else {

    echo "<center>Login gagal! Captcha tidak sesuai<br>";
    echo "<a href='form_login.php'>ULANGI LAGI</a></center>";

}
