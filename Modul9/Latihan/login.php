<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
mysql_connect('localhost','root','');
mysql_select_db('informatikaa');

$username = $_POST['username'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if($submit){
    $sql = "select * from user where username='$username' and password='$password' ";
    $query = mysql_query($sql);
    $row = mysql_fetch_array($query);
    if($row['Username']!="") {
        //berhasil login
        $_SESSION['username']=$row['Username'];
        $_SESSION['status']=$row['Status'];
        ?>
        <script language script="JavaScript">
            alert('Anda Login Sebagai <?php echo $row['Username']; ?>');
            document.location='hasillogin.php';
            </script>
            <?php
    }else{
        //gagal login
        ?>
        <script language script='JavaScript'>
        alert('Gagal Login');
        // document.location='login.php';
        </script>
        <?php
    }
}
?>
<form method='post' action='login.php'>
<p align='center'>
Username : <input type='text' name='username'><br>
Password : <input type='password' name='password'></br>
<input type='submit' name='submit'>
</p>
</form>