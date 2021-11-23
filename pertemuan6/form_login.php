<h2>Form Login</h2>
<form action="cek_login.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td>: <input type="text" name="id_user"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>: <input type="text" name="passwd"></td>
        </tr>
        <tr>
            <td>Captcha<br><img src="captcha.php"></td>
            <td>: <input type="text" name="captcha_code"></td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td><input type="submit" value="LOGIN"></td>
        </tr>
    </table>
</form>