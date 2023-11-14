<?php
include "config.php";

if(isset($_POST['saveSubmit'])){
   $fullName=$_POST['fullName'];
   $email=$_POST['email'];
   $gender=$_POST['gender'];
   $password=$_POST['password'];

   $sql=mysqli_query($conn,"INSERT INTO userform value(null,'$fullName','$email','$gender','$password')");

   if($sql==true){
      echo "new record is created successfull...";
      header("location: veiw.php");
   }
   else{
      echo "error occur" .$sql ,"<br>" .$conn->error;
   }
   $conn->close();

}





?>
<!DOCTYPE html>
<html lang="en">

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
         <h2>Register Form</h2>
         <form action="" method="POST">
            <div class="row">
               <div class=" mb-4">
                  <div class="form-outline">
                     <label class="form-label" for="form3Example1m">Full name</label>
                     <input type="text" name="fullName" id="form3Example1m" class="form-control form-control-lg"
                        required />

                  </div>
               </div>

            </div>
            <div class="col-md-20 mb-4">
               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example97">Email</label>
                  <input type="email" name="email" id="form3Example97" class="form-control form-control-lg" required />

               </div </div>


               <div class=" d-md-flex justify-content-start align-items-center mb-4 py-2">
                  <h6 class="mb-0 me-4">Gender: </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
                     <label class="form-check-label" for="femaleGender">Female</label>
                     <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" />
                  </div>
                  <div class="form-check form-check-inline mb-0 me-4">
                     <label class="form-check-label" for="maleGender">Male</label>
                     <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" />

                  </div>
               </div>




               <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example9">password</label>
                  <input type="password" name="password" id="form3Example9" class="form-control form-control-lg" />

               </div>
               <div class="col-12">
                  <input type="submit" name="saveSubmit" class="btn btn-success" value="save data"></input>
               </div>
            </div>
         </form>
      </div>

   </div>
</body>

</html>