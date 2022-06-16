<?php
session_start();
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'php1');  // 預設使用的資料庫名稱
?>


<?php

if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "歡迎".$cookieID."光臨";
}else{
    echo "恭喜您發現本網站!";
}
?>

<html>
<head>

</head>
<?php
echo "<body bgcolor='#CAD8E6'>";

?>
<center><h1>會員登入</h1></center>
<form action="" method="post">
                    <ul>
                        <li>帳號:<input type="text" name="uId" required><!--required設定此項為必填-->
                        <li>密碼:<input type="text" name="upsw" required>
                        <li><input type="submit" value="登入"><input type="submit" value="忘記密碼"><input type="submit" value="註冊去">
                    </ul>
                
</form>
<?php

//$aID="admin";
//$aPWD="1234567";

//echo time();
//date_default_timezone_set('Asia/Taipei');
//echo date("m-d-Y H:i:s",time());
//header("Refresh:1");
if(isset($_POST["uId"])){
    if($_POST["uId"]!=null){
        $uId=$_POST["uId"];
        $uPwd=$_POST["upsw"];

        $SQL="SELECT * FROM user WHERE uName='$uId' AND uPwd='$uPwd'";
        $result=mysqli_query($link,$SQL);

        if($result=mysqli_num_rows($result)==1){
            $_SESSION["login"]="Yes";
            setcookie("UID",$uId,time()+17280);
            header('Location: register.php');     
        }else{
            echo "帳號或密碼輸入錯誤";
        }
      
        //echo $uId."<br/>";
        //echo $upsw"<br/>"; 
       // if($aID==$uId && $aPWD==$upsw){
         //   $_SESSION["login"]="Yes";
            //echo "登入成功!";
           // setcookie("UID",$uId,time()+17280);
            //header('Location: register.php');//跳過去另一頁
        //}else{
          //  echo "帳號或密碼輸入錯誤";
       // }
    }else{
        echo "您尚未輸入帳號或密碼!";
    }
    
}else{
    echo "歡迎登入，請輸入帳號密碼!";
}
//如果出現header already sent
//ob_flash
?>
</body>
</html>