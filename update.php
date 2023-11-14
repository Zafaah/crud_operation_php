<?php
include "config.php";
if(isset($_POST ['update'])){
   $fullName=$_POST['fullName'];
   $user_id=$_POST ['user_id'];
   $email=$_POST['email'];
   $gender=$_POST['gender'];
   $password=$_POST['password'];

   $sql=mysqli_query($conn,"UPDATE userform 
   set fullName='$fullName',email='$email',gender='$gender',password='$password' 
   WHeRE `id`='$user_id'");

   if($sql==TRUE){
      
      echo "record update succesfully...";
      header("location: veiw.php");
   }else{
      echo "error" .$sql ."<br>" .$conn->error;
   }

}

if(isset($_GET['id'])){
   $user_id=$_GET['id'];

   $sql="SELECT *FROM `userform` WHERE `id`='$user_id' ";

   $result= $conn->query($sql);
   while($row=mysqli_fetch_array($result)){
     $id=$row['id'];
      $fullName=$row['fullName'];
      $email=$row['email'];
      $gender=$row['gender'];
      $password=$row['password'];
       
   }
  
   ?>
<h2>personal Information</h2>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <title>Cruid_Operations</title>
</head>

<body>
   <div>
      <div class="container p-5 m-3 " style="width: 20% ;">
         <form action="" method="POST">
            <div class="row">
               <div class=" mb-4">
                  <div class="form-outline">
                     <label class="form-label" for="form3Example1m">Full name</label>
                     <input type="text" name="fullName" id="form3Example1m" class="form-control form-control-lg"
                        value="<?php echo $fullName; ?>" required />
                     <input type="hidden" name="user_id" value="<?php echo $id; ?>" />

                  </div>
               </div>
            </div>
            <div class="col-md-20 mb-4">
               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Email</label>
                  <input type="email" name="email" id="form3Example97" class="form-control form-control-lg"
                     value="<?php echo $email ?>" required />
               </div </div>
               <div class=" d-md-flex justify-content-start align-items-center mb-4 py-2">
                  <h6 class="mb-0 me-4">Gender: </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
                     <label class="form-check-label" for="femaleGender">Female</label>
                     <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female"
                        <?php if($gender=="Female"){ echo "checked";}?> />
                  </div>
                  <div class="form-check form-check-inline mb-0 me-4">
                     <label class="form-check-label" for="maleGender">Male</label>
                     <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male"
                        <?php if($gender == 'Male'){ echo "checked";} ?> />
                  </div>
               </div>
               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">password</label>
                  <input type="password" name="password" id="form3Example9" class="form-control form-control-lg"
                     value="<?php echo $password ?>" required />
               </div>
               <div class="col-12">
                  <input type="submit" name="update" class="btn btn-success" value="update"></input>
               </div>
            </div>
         </form>



      </div>
   </div>
</body>

</html>
<?php

}else{
   header("location:veiw.php");
}

?>