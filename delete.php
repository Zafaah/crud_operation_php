<?php 

include "config.php"; 

if(isset($_GET['id'])){
   $user_id=$_GET['id'];

   $sql="DELETE FROM userform WHERE id='$user_id'";

   $result=$conn->query($sql);

   if($result==true){
      echo "the record deleted successfully...";
      header("location:veiw.php");
   }else{
      echo "error is Acccur" .$sql ."<br>" .$conn->error;
   }
}



?>