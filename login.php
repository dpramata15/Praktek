<?php
session_start();
$username_valid = "unnes";
$password_valid = "123456";

if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = [];
}

$username = isset($_POST["username"]) ? $_POST["username"] : '';
$password = isset($_POST["password"]) ? $_POST["password"] : '';
if (($username == $username_valid) && ($password == $password_valid)){

    $_SESSION["login"][] = [
        "username"=> $username,
        "password"=> $password,
        "time"=> date("Y-m-d H:i:s")
    ];

    echo "Login Berhasil : " . $username . ", anda sudah login sebanyak:" . count($_SESSION["login"]) . " kali";
    
    echo '<br>';

    echo '<a href="logout.php">Logout</a>';

    echo '<pre>';
?>

    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Time</th>
        </tr>
        <?php foreach ($_SESSION["login"] as $login): ?>
            <tr>
                <td><?php echo $username; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $login["time"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php   
} else {
    echo "Login Gagal";
}

