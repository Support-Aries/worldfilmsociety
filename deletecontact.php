
<?php
include 'dbcon.php';  

 $id=$_REQUEST['id'];
 


mysqli_query($conn,"delete from contact where id='$id'");

echo "<script type='text/javascript'> document.location = 'listcontact.php'; </script>"; 



