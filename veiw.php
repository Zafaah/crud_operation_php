<?php
include "config.php";

$sql= "SELECT * from userform";

$result= $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
   <title>Document</title>
</head>

<body>
   <div class="container p-5">

      <div class="row">
         <div class="col-6">
            <a href="create.php" class="btn btn-primary">AddNew </a>

         </div>

      </div>

      <table class="table table-bordered table-hover">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Full_Name</th>
               <th scope="col">Email</th>
               <th scope="col">Gender</th>
               <th scope="col">password</th>
               <th scope="col">Action</th>

            </tr>

         </thead>
         <tbody>
            <?php
            while($row=mysqli_fetch_array($result)){
               ?>
            <tr>
               <td><?php echo $row['id']?></td>
               <td><?php echo $row['fullName']?></td>
               <td><?php echo $row['email']?></td>
               <td><?php echo $row['gender']?></td>
               <td><?php echo $row['password']?></td>
               <td>
                  <a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-success"><i
                        class="bi bi-pencil"></i>Edit</a>
                  <a href="delete.php?id=<?php echo $row['id']; ?>" Class="btn btn-danger "><i
                        class="bi bi-person-x"></i>delete</i></a>

               </td>
            </tr>

            <?php
            }?>




         </tbody>
      </table>
   </div>
</body>

</html>