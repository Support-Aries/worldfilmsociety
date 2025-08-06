<?php
include 'dbcon.php';


if (isset($_REQUEST['sub']))
{
    
    $email=$_REQUEST['s_email'];
    $regdate=date("d-m-Y");  
    $ip = $_SERVER['REMOTE_ADDR'];
 echo $sql = "INSERT INTO subscribe(s_email,addDate,s_ipaddress) VALUES ('$email','$regdate','$ip')"; 

 mysqli_query($conn, $sql);

//header('location:index.php?st=1');exit;
echo "<script type='text/javascript'> document.location = 'index.php?st=1'; </script>"; exit;
}
?>
     