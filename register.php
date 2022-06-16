<?php
session_start();

if(isset($_SESSION['login'])){
    if( $_SESSION["login"]=="Yes"){
        echo "<a href='logout.php'>登出系統</a>";
    }else{
        echo "非法進入系統";
        exit();
    }
}else{
    echo "非法進入系統";
        exit();
}



?>
<html>
<head>

</head>
<?php
echo "<body bgcolor='#CAD8E6'>";

?>
<center><h1>會員註冊</h1></center>
<form action="signinfo.php" method="post">
                    <ul>
                        <li>帳號:<input type="text" name="uId" required><!--required設定此項為必填-->
                        <li>密碼:<input type="text" name="pwd" required>
                        <li>e-mail:<input type="email" name="uemail" required>
                        <li>tel:<input type="tel" name="utel" placeholder="02-28115522" pattern="[0-9]{2}-[0-9]{8}" required>
                        <li><input type="submit">
                    </ul>
                </form>
</body>
</html>