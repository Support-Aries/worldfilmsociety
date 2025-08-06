
<?php
include 'dbcon.php';  

 $id=$_REQUEST['s_id'];
 


mysqli_query($conn,"delete from subscribe where s_id='$id'");

echo "<script type='text/javascript'> document.location = 'listsubscribe.php'; </script>"; 



